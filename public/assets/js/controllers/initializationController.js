const port = '8000';
const baseApi = `http://localhost:${port}/api/`;
const successStatus = 'success';
const errorStatus = 'error';
const app = angular.module('app', ['angularUtils.directives.dirPagination', 'ckeditor']);

app.config(function(paginationTemplateProvider) {
  paginationTemplateProvider.setPath('/assets/admin/customTemplate/customTemplate.html');
});
app.filter('reverse', function() {
  return function(items) {
    return items.slice().reverse();
  };
});
setTimeout(() => {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
}, 2000);

function checkCustomerLogin() {
  const request = JSON.parse(sessionStorage.getItem('customer')) || JSON.parse(localStorage.getItem('customer')) || undefined;

  return request;
}

function logout(){
  sessionStorage.clear('login');
  window.location.replace('/admin/login');
}

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

function convertDatetoDay(date) {
  let result;
  if (date)
    date = new Date(date);
    result = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
  return result;
}

async function getCities() {
  let data = [];
  await $.ajax({
    url: '/assets/hanhchinhvn/tinh_tp.json',
    context: document.body
  }).done(function (res) {
    data = res;
  });
  return data;
}

async function getDistricts() {
  let data = [];
  await $.ajax({
    url: '/assets/hanhchinhvn/quan_huyen.json',
    context: document.body
  }).done(function (res) {
    data = res;
  });
  return data;
}

async function getCommunes() {
  let data = [];
  await $.ajax({
    url: '/assets/hanhchinhvn/xa_huyen.json',
    context: document.body
  }).done(function (res) {
    data = res;
  });
  return data;
}
