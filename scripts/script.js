// ------------------HEADER NAV----------------------------
// ------------------NAV GRID CATEGORIAS----------------------------

var btnCategorias = document.getElementById('btn-categorias'),
grid = document.getElementById('grid');
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
    a.addEventListener('mouseover',(elemento)=>{
        var categoria = elemento.target.dataset.categoria;
        subcategoria.forEach(esto => {
            var sub = esto.dataset.subcategoria;
            esto.classList.remove('active')
            if(categoria == sub){
                esto.classList.add('active');
            };
        }); 
    });
});

