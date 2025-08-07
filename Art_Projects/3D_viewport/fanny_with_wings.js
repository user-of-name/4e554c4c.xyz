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
camera.position.y = 4;
camera.position.z = 4;
camera.position.x = -4;
scene.add(camera);

scene.fog = new THREE.Fog( "#3A3A3A", 5, 20 );

// Light
const ambientLight = new THREE.AmbientLight('#83FFE1', 0.5);
scene.add(ambientLight);

// const PointLight = new THREE.PointLight('white', 1.5);
// PointLight.position.x = -1.5;
// PointLight.position.z = 1;
// PointLight.position.y = 1;
// scene.add(PointLight);

const AreaLight = new THREE.DirectionalLight('white', 4);
AreaLight.position.x = 3;
AreaLight.position.z = 2;
AreaLight.position.y = 5;
AreaLight.lookAt( 0, 1, 0 );
AreaLight.castShadow = true; // default false
scene.add(AreaLight);

const controls = new OrbitControls(camera, renderer.domElement);


// gltf loader
const gltfLoader = new GLTFLoader(loadingManager);
gltfLoader.load(
  '/models/fanny_with_wings.glb',
  gltf => {
    const mesh = gltf.scene.children[0];
    mesh.position.y=-1;
    mesh.castShadow = true;
    mesh.receiveShadow = true;
    scene.add(mesh);
  }
);

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