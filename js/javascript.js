function redirectID(id) {
    window.location = "?page=game&id="+id;
}
function redirectPID(id) {
    window.location = "?page=plan&id="+id;
}
function redirect(page) {
    window.location = "?page="+page;
}
function removeRedirect(id) {
    window.location ="?page=removedGame&id="+id;
}
function removePlanRedirect(id) {
    window.location ="?page=removedPlanning&id="+id;
}