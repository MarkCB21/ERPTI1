function setUpdateAction() {
document.frmUser.action = "edit_direc.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("¿Estas seguro que deseas eliminar estas filas?")) {
document.frmUser.action = "delete_direc.php";
document.frmUser.submit();
}
}