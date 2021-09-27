function main()
{
  deleteModal()
}
main()

//Handle modal delete
function deleteModal ()
{
  const btnDelete = document.querySelectorAll('.btn-delete');
  const formDelete = document.getElementById('form-delete')
  const btnSuccessDelete = document.getElementById('btnSuccessDelete')
  for(let i = 0;i<btnDelete.length;i++) {
    btnDelete[i].onclick = function() {
      const urlDelete = btnDelete[i].dataset.url
      formDelete.setAttribute('action',urlDelete)
    }
  }
  btnSuccessDelete.onclick = function() {
    formDelete.submit()
  }
}
