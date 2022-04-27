const app = angular.module('app', ['angularUtils.directives.dirPagination','ckeditor']);
setTimeout(() => {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
}, 2000);

function showAlert(status) {
  const alert = $('.alert-'+status);
  alert.show();
  setTimeout(() => {
    alert.hide();
  }, 2000);
}

function convertDate(date) {
  let result;
  if (date)
    date = new Date(date);
    result = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes();
  return result;
}
