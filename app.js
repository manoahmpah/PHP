// variable 

let container;
let camera;
let renderer;
let scene;
let caculator;

function init(){
    // on injecte dans container la div avec la class scene
    container = document.querySelector('.scene');

    // creation de la scene
    scene = new THREE.Scene();


    // création de la camera
    const fov = 35;
    const aspect = container.clientWidth / container.clientHeight;
    const near = 0.1;
    const far = 500;

        //camera setup
    camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
    camera.position.set(0, 0.46, 1.9);


    // lumiere d'ambience
    const ambient = new THREE.AmbientLight(0x96a9e6, 3);
    scene.add(ambient);

  

    //Renderer
    renderer = new THREE.WebGLRenderer({antialias:true, alpha:true});
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    
    // charger le model avec GLTF
    let loader = new THREE.GLTFLoader();
    loader.load('./3D_model/scene.gltf', function(gltf){
       scene.add(gltf.scene);
       caculator = gltf.scene.children[0];
       animate();
    });

}


// fonction pour animer l'objet 3D
function animate(){
    requestAnimationFrame(animate);
    caculator.rotation.z += 0.002;
    renderer.render(scene, camera);
}

init()

