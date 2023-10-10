function showPopupMenu () {
    let PopupMenu = document.getElementById('popupMenu');

    if (PopupMenu.style.display === 'none') {
        PopupMenu.style.display = 'block';
    } else {
        PopupMenu.style.display = 'none';
    }
}