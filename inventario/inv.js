function setUpdateAction() {
document.frmUser.action = "edit_inv.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("¿Estas seguro que deseas eliminar estas filas?")) {
document.frmUser.action = "delete_inv.php";
document.frmUser.submit();
}
}