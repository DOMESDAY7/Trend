let btnDells = document.querySelectorAll(".btnDell")
let btnComs = document.querySelectorAll(".btnCom")

btnDells.forEach( btnDell=> {
    btnDell.addEventListener("click",()=>{
        if(confirm("Are you sure you want to delete this user?")){
            dellTheUser(btnDell.id);
        }
    })
});
btnComs.forEach( btnCom=> {
    btnCom.addEventListener("click",()=>{
        if( btnCom.getAttribute("data-comment")=="true"){
            if(confirm("This user will no longer be able to comment")){
                blockComment(btnCom.id,btnCom)
             }
        }else{
            unBlockComment(btnCom.id,btnCom)
        }
       
    })
});

function dellTheUser(id){
    let url = "./API/dellUser.php?userId=" +id
    let rowDell = document.querySelector(`.row${id}`)
    fetch(url).then(rowDell.style.display="none")
}
function blockComment(id,btnCom){
    let url = "./API/blockComment.php?block=true&id_user=" + id
    fetch(url).then(btnCom.innerHTML = `<img src="./public/img/cantComment.svg" alt="the user can't comment"> can't comment`,
    btnCom.setAttribute("data-comment","false"))
}
function unBlockComment(id,btnCom){
    let url = "./API/blockComment.php?id_user="+id;
    fetch(url).then(btnCom.innerHTML = `<img src="./public/img/canComment.svg" alt="the user can comment"> can comment`,
    btnCom.setAttribute("data-comment","true"))
}