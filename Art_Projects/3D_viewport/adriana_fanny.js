import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader';

// Renderer
const canvas = document.querySelector('#container3D');
const renderer = new THREE.WebGLRenderer({
  canvas,
  antialias: true
});
var viewport_height = canvas.clientHeight;
var viewport_width = canvas.clientWidth;
renderer.setSize(viewport_width, viewport_height);
renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);

renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap; // default THREE.PCFShadowMap

// loading manager

const loadingManager = new THREE.LoadingManager();

loadingManager.onStart = function(url, item, total) {
    console.log(`Started loading: ${url}`);
    document.getElementById('loadingProgress').innerText = ` Loading ${url}`;
}
loadingManager.onProgress = function(url, loaded, total) {
  const percent = ((loaded / total) * 100).toFixed(2);
  console.log(`Loading ${url}: ${percent}%`);
  document.getElementById('loadingProgress').innerText = ` Loading ${url}: ${percent}%`;
}
loadingManager.onLoad = function() {
    console.log(`Loaded`);
    const progressElem = document.getElementById('loadingProgress');
      progressElem.remove();
    animate();
}

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
camera.position.y = 1;
camera.position.z = 10;
camera.position.x = 0;
camera.lookAt(0, 15, 0);
scene.add(camera);

scene.fog = new THREE.Fog( "#3A3A3A", 7, 35 );

// Light
const ambientLight = new THREE.AmbientLight('#83FFE1', 0.8);
scene.add(ambientLight);

const AreaLight = new THREE.DirectionalLight('white', 4);
AreaLight.position.x = 0;
AreaLight.position.z = 2;
AreaLight.position.y = 5;
AreaLight.lookAt( 0, 0.5, 0 );
AreaLight.castShadow = true; // default false
scene.add(AreaLight);

const AreaLight2 = new THREE.DirectionalLight('#FF9C53', 1);
AreaLight2.position.x = 0;
AreaLight2.position.z = -1;
AreaLight2.position.y = 8;
AreaLight2.lookAt( 0, 0, 0 );
AreaLight2.castShadow = true; // default false
scene.add(AreaLight2);
const controls = new OrbitControls(camera, renderer.domElement);

const AreaLight3 = new THREE.DirectionalLight('white', 0.8);
AreaLight3.position.x = 4;
AreaLight3.position.z = -2;
AreaLight3.position.y = 3;
AreaLight3.lookAt( 3, -0.5, 0 );
AreaLight3.castShadow = true; // default false
scene.add(AreaLight3);

// gltf loader
const gltfLoader = new GLTFLoader(loadingManager);
gltfLoader.load(
  '/models/adriana_fanny.glb',
  gltf => {
    const mesh = gltf.scene.children[0];
    mesh.scale.set(0.25,0.25,0.25);
    mesh.castShadow = true;
    mesh.receiveShadow = true;
    mesh.position.y = -1;
    scene.add(mesh);
  }
);

gltfLoader.load(
  '/models/codarts_group_base.glb',
  gltf => {
    const mesh = gltf.scene.children[0];
    mesh.receiveShadow = true;
    mesh.position.y = -1;
    scene.add(mesh);
  }
);
AreaLight.shadow.camera.near = 0.1;
AreaLight.shadow.camera.far = 10;
// Draw
const clock = new THREE.Clock();
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