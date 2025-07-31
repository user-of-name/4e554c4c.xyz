import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

// Renderer
const canvas = document.querySelector('#container3D');
const renderer = new THREE.WebGLRenderer({
  canvas,
  antialias: true
});

renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap; // default THREE.PCFShadowMap
renderer.outputEncoding = THREE.sRGBEncoding;
renderer.toneMapping = THREE.ACESFilmicToneMapping;
renderer.toneMappingExposure = 2;

var viewport_height = canvas.clientHeight;
var viewport_width = canvas.clientWidth;
renderer.setSize(viewport_width, viewport_height);
renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);

// Scene
const scene = new THREE.Scene();
scene.background = new THREE.Color('#b8b8b8');

// Camera
const camera = new THREE.PerspectiveCamera(
  75,
  viewport_width / viewport_height,
  0.1,
  1000
);
camera.position.y = 0;
camera.position.z = -2;
camera.position.x = -2;
camera.lookAt(0, -5, 0);
scene.add(camera);

// Orbit Controls
const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true; // Enable damping (inertia)
controls.dampingFactor = 0.05; // Damping factor
controls.screenSpacePanning = false; // Disable panning in screen space

// Light
const ambientLight = new THREE.AmbientLight('white', 1);
scene.add(ambientLight);

const AreaLight = new THREE.DirectionalLight('white', 1);
AreaLight.position.x = 0;
AreaLight.position.z = 0;
AreaLight.position.y = 20;
AreaLight.lookAt(0, 0, 0);
AreaLight.castShadow = false; // default false
scene.add(AreaLight);

// gltf loader
const gltfLoader = new GLTFLoader();
var Ypos = -6;

gltfLoader.load(
  '/models/101 model.glb',
  gltf => {
    const mesh = gltf.scene.children[0];
    mesh.scale.set(0.5, 0.5, 0.5);
    mesh.castShadow = false;
    mesh.receiveShadow = false;
    mesh.position.y = Ypos;
    scene.add(mesh);
  }
);

// Draw
const clock = new THREE.Clock();

AreaLight.shadow.camera.near = 0.1;
AreaLight.shadow.camera.far = 10;

function draw() {
  const delta = clock.getDelta();
  renderer.render(scene, camera);
}

function setSize() {
  viewport_height = canvas.clientHeight;
  viewport_width = canvas.clientWidth;
  camera.aspect = viewport_width / viewport_height;
  camera.updateProjectionMatrix();
  renderer.setSize(viewport_width, viewport_height);
  renderer.render(scene, camera);
}

// Event
window.addEventListener('resize', setSize);

function animate() {
  requestAnimationFrame(animate);
  const delta = clock.getDelta();
  controls.update(); // Update OrbitControls
  renderer.render(scene, camera);
}

animate();