function setUpdateAction() {
document.frmUser.action = "edit_user.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("¿Estas seguro que deseas eliminar estas filas?")) {
document.frmUser.action = "delete_user.php";
document.frmUser.submit();
}
}
function setUpdatepass() {
document.frmUser.action = "changepass.php";
document.frmUser.submit();
}