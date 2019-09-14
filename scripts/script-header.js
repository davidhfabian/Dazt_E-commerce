// ------------------HEADER NAV----------------------------
// ------------------NAV GRID CATEGORIAS----------------------------

var btnCategorias = document.getElementById('btn-categorias'),
    grid = document.getElementById('grid'),
    btnMenuExit = document.getElementById('btn-menu-exit'),
    btnBack = document.querySelector('.btn-back'),
    containerLinksNav = document.querySelector('.menu .container-links-nav'),
    containerSubcategorias = document.querySelector('.container-subcategorias');


var movil = () => window.innerWidth >= 800;

btnCategorias.addEventListener('mouseover', () => {
    if(movil()==true){
        grid.classList.add('active');
	}
});// aparece y se queda

grid.addEventListener('mouseleave', () => {
    if(movil()){
        grid.classList.remove('active');
	}
}); //desapaece si se sale del grid


// ------------------NAV GRID SUBCATEGORIAS----------------------------

var categoria = document.querySelectorAll('.container-categorias a');
var subcategoria = document.querySelectorAll('.subcategorias');
categoria.forEach(a => {
    a.addEventListener('mouseenter',(elemento)=>{
        if(movil()){
            var categoria = elemento.target.dataset.categoria;
            subcategoria.forEach(esto => {
                var sub = esto.dataset.subcategoria;
                esto.classList.remove('active')
                if(categoria == sub){
                    esto.classList.add('active');
                };
            }); 
        }
        
        
    });
});


//-------------------NAV RESPONSIVE--------------------------------------------

document.querySelector('#btn-menu-bar').addEventListener('click',(e)=>{
    e.preventDefault();
    if (containerLinksNav.classList.contains('active')){
        containerLinksNav.classList.remove('active');
        document.querySelector('body').style.overflow = 'visible'
    } else {
        containerLinksNav.classList.add('active');
        document.querySelector('body').style.overflow = 'hidden'
        
    }
}) //mostrar menu

//-------------------NAV RESPONSIVE CATEGORIAS------------------------------------
if(movil()==false){
    btnCategorias.addEventListener('click',(e)=>{
        e.preventDefault();
        grid.classList.add('active');
        btnMenuExit.style.display = 'initial'
        
    })
    btnMenuExit.addEventListener('click',(e)=>{
        e.preventDefault();
        console.log(e.target);
        document.querySelectorAll('.menu .active').forEach((btnExit)=>{
            btnExit.classList.remove('active');
        })
        btnMenuExit.style.display = 'none';
        document.querySelector('body').style.overflow = 'visible'

    })//boton exit
    btnBack.addEventListener('click',(e)=>{
        e.preventDefault();
        console.log(e.target)
        grid.classList.remove('active');
        btnMenuExit.style.display = 'none';
    })
}


//------------------ENLACES NAV------------------------

document.querySelectorAll('.container-categorias a').forEach(elemento => {
    elemento.addEventListener('click', (e)=>{
        
        if(movil()==false){
            containerSubcategorias.classList.add('active')
            document.querySelectorAll('.subcategorias').forEach(categoria=>{
                categoria.classList.remove('active')
                if(elemento.dataset.categoria == categoria.dataset.subcategoria){
                    categoria.classList.add('active');
                }
                
                
            })
        };
    })
})

document.querySelectorAll('.subcategorias .btn-back').forEach(btnBack=>{
    btnBack.addEventListener('click',(e)=>{
        e.preventDefault();
        console.log(e.target)
        containerSubcategorias.classList.remove('active');
        //btnMenuExit.style.display = 'none';
    })
})

