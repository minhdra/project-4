const nameBooks = 'books/';

app.controller('productsController', productsController);
function productsController($scope, $http) {
  $scope.priceFilter = '0';
  $scope.option = 'all';
  $scope.sortOptions = [
    {
      label: 'Tùy chọn',
      value: 'all',
    },
    {
      label: 'Tên A-Z',
      value: 'name asc',
    },
    {
      label: 'Tên Z-A',
      value: 'name desc',
    },
    {
      label: 'Giá tăng dần',
      value: 'price asc',
    },
    {
      label: 'Giá giảm dần',
      value: 'price desc',
    },
  ];
  $scope.search = {
    category_id: $('#category_id').val(),
    book_name: $('#keyword').val(),
  };
  const connect_api = function (method, url, data, callback) {
    let params = {};
    if (data) params = { data };
    $http({
      method: method,
      url: url,
      ...params,
    }).then(
      function (response) {
        callback(response);
      },
      (error) => {
        console.log(error);
        showAlert(errorStatus);
      }
    );
  };

  $scope.loadData = () => {
    if ($scope.search.book_name || $scope.search.category_id) {
      connect_api(
        'POST',
        baseApi + nameBooks + 'search',
        $scope.search,
        function (res) {
          $scope.data = res.data;
          $scope.data.forEach((book) => {
            var tmp_array = [];
            if (book.genres != null) {
              book.genres_app = JSON.parse(book.genres);
              var i = 0;
              for (var i = 0; i < book.genres_app.length; i++) {
                tmp_array.push(book.genres_app[i].tag);
              }
              book.genres_app = tmp_array;
            }
          });
          $scope.root = $scope.data;
        }
      );
    } else {
      connect_api('GET', baseApi + nameBooks, null, function (res) {
        $scope.data = res.data.books;
        $scope.data.forEach((book) => {
          var tmp_array = [];
          if (book.genres != null) {
            book.genres_app = JSON.parse(book.genres);
            var i = 0;
            for (var i = 0; i < book.genres_app.length; i++) {
              tmp_array.push(book.genres_app[i].tag);
            }
            book.genres_app = tmp_array;
          }
        });
        console.log($scope.data);
        $scope.root = $scope.data;
      });
    }
  };
  $scope.loadData();

  // Filter by price
  $scope.handleChangePriceFilter = () => {
    switch ($scope.priceFilter) {
      case '0':
        $scope.data = $scope.root;
        break;
      case '1':
        $scope.data = $scope.root.filter((item) => item.prices.price < 100000);
        break;
      case '2':
        $scope.data = $scope.root.filter(
          (item) => item.prices.price >= 100000 && item.prices.price < 200000
        );
        break;
      default:
        break;
    }
  };

  // Sort
  $scope.sorted = (option) => {
    console.log(option);
    switch (option) {
      case 'all':
        $scope.data.sort((a, b) => {
          return sortNameAsc(a, b);
        });
        break;
      case 'name asc':
        $scope.data.sort((a, b) => {
          return sortNameAsc(a, b);
        });
        break;
      case 'name desc':
        $scope.data.sort((a, b) => {
          return sortNameDesc(a, b);
        });
        break;
      case 'price asc':
        $scope.data.sort((a, b) => {
          return sortPriceAsc(a, b);
        });
        break;
      case 'price desc':
        $scope.data.sort((a, b) => {
          return sortPriceDesc(a, b);
        });
        break;

      default:
        toastr.warning('Bạn chọn sai rồi 😥');
        break;
    }
  };

  // Sort name ascending
  const sortNameAsc = (a, b) => {
    const nameA = a.book_name.toUpperCase(); // ignore upper and lowercase
    const nameB = b.book_name.toUpperCase(); // ignore upper and lowercase
    if (nameA < nameB) {
      return -1;
    }
    if (nameA > nameB) {
      return 1;
    }

    // names must be equal
    return 0;
  };

  // Sort name descending
  const sortNameDesc = (a, b) => {
    const nameA = a.book_name.toUpperCase(); // ignore upper and lowercase
    const nameB = b.book_name.toUpperCase(); // ignore upper and lowercase
    if (nameA > nameB) {
      return -1;
    }
    if (nameA < nameB) {
      return 1;
    }

    // names must be equal
    return 0;
  };

  // Sort price ascending
  const sortPriceAsc = (a, b) => {
    return a.prices.price - b.prices.price;
  }

  // Sort price descending
  const sortPriceDesc = (a, b) => {
    return b.prices.price - a.prices.price;
  }
}
