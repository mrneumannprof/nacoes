function monstrarImagem(img) {
    const imagemGrande=document.getElementById("imagemGrande");
    imagemGrande.scr=img.src;
    imagemGrande.parentElement.style.display="block";
}