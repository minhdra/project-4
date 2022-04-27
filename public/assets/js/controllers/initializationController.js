const app = angular.module('app', ['angularUtils.directives.dirPagination','ckeditor']);
setTimeout(() => {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
}, 2000);

function showAlert(status) {
  if (status === 'success')
  {
    toastr.success('Thành công! Chúc vui 🐱‍🏍', 'Thành công rồi', {
      progressBar: !0,
    });
  } else
  {
    toastr.error('Có lỗi, xử lý đi 😒', 'Có lỗi rồi', {
      progressBar: !0,
    });
  }
}

function convertDate(date) {
  let result;
  if (date)
    date = new Date(date);
    result = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes();
  return result;
}
