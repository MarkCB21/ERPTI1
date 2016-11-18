function setUpdateAction() {
document.frmUser.action = "edit_data.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("¿Estas seguro que deseas eliminar estas filas?")) {
document.frmUser.action = "delete_data.php";
document.frmUser.submit();
}
}