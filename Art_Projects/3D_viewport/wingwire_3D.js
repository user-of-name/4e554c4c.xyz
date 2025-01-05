import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader';

// Renderer
const canvas = document.querySelector('#container3D');
const renderer = new THREE.WebGLRenderer({
  canvas,
  antialias: true
});

renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap; // default THREE.PCFShadowMap

var viewport_height = canvas.clientHeight;
var viewport_width = canvas.clientWidth;
renderer.setSize(viewport_width, viewport_height);
renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);

// Scene
const scene = new THREE.Scene();
scene.background = new THREE.Color('black');

// Camera
const camera = new THREE.PerspectiveCamera(
  25,
  viewport_width / viewport_height,
  0.1,
  1000
);
camera.position.y = 0.1;
camera.position.z = 12;
camera.position.x = 0;
camera.lookAt(0, 15, 0);
scene.add(camera);

scene.fog = new THREE.Fog( "#3A3A3A", 10, 25 );

// Light
const ambientLight = new THREE.AmbientLight('#E5BDFF', 0.2);
scene.add(ambientLight);

const AreaLight = new THREE.DirectionalLight('white', 4);
AreaLight.position.x = 0;
AreaLight.position.z = 1;
AreaLight.position.y = 7;
AreaLight.lookAt( 0, 0, 0 );
AreaLight.castShadow = true; // default false
scene.add(AreaLight);

const AreaLight2 = new THREE.DirectionalLight('white', 4);
AreaLight2.position.x = 0;
AreaLight2.position.z = -1;
AreaLight2.position.y = 8;
AreaLight2.lookAt( 0, 0, 0 );
AreaLight2.castShadow = true; // default false
scene.add(AreaLight2);

// const PointLight2 = new THREE.PointLight('white', 1.5);
// PointLight2.position.x = 5;
// PointLight2.position.z = 5;
// PointLight2.position.y = 1;
// scene.add(PointLight2);

const controls = new OrbitControls(camera, renderer.domElement);


// gltf loader
const gltfLoader = new GLTFLoader();
gltfLoader.load(
  '/models/wingwire.glb',
  gltf => {
    const mesh = gltf.scene.children[0];
    mesh.scale.set(0.5,0.5,0.5);
    mesh.castShadow = true;
    mesh.receiveShadow = true;
    mesh.position.y = -2;
    scene.add(mesh);
  }
);

gltfLoader.load(
  '/models/codarts_group_base.glb',
  gltf => {
    const mesh = gltf.scene.children[0];
    mesh.receiveShadow = true;
    mesh.position.y = -2;
    scene.add(mesh);
  }
);

//Create a helper for the shadow camera (optional)
// const helper = new THREE.CameraHelper( light.shadow.camera );
// scene.add( helper );

// Draw
const clock = new THREE.Clock();

AreaLight.shadow.camera.near = 0.1;
AreaLight.shadow.camera.far = 10;
// scene.add( new THREE.CameraHelper( AreaLight.shadow.camera ) );

function draw() {
  const delta = clock.getDelta();

  renderer.render(scene, camera);
  renderer.setAnimationLoop(draw);
}

function setSize() {
  camera.aspect = viewport_width / viewport_height;
  camera.updateProjectionMatrix();
  renderer.setSize(viewport_width, viewport_height);
  renderer.render(scene, camera);
}

// Event
window.addEventListener('resize', setSize);

draw();