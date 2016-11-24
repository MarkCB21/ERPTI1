function setUpdateAction() {
document.frmUser.action = "edit_comuna.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("¿Estas seguro que deseas eliminar estas filas?")) {
document.frmUser.action = "delete_comuna.php";
document.frmUser.submit();
}
}