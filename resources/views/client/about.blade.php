@extends('_client_layout')
@section('content')
<main id="content">
  <div class="mb-5 space-bottom-lg-3">
    <div class="py-3 py-lg-7">
      <h6 class="font-weight-medium font-size-7 text-center my-1">Về chúng tôi</h6>
    </div>
    <img class="img-fluid" src="/assets/img/1920x650/img1.jpg" alt="Image-Description">
    <div class="container">
      <div class="mb-lg-8">
        <div class="col-lg-9 mx-auto">
          <div class="bg-white mt-n10 mt-md-n13 pt-5 pt-lg-7 px-3 px-md-5 pl-xl-10 pr-xl-4">
            <div class="mb-4 mb-lg-7 ml-xl-4">
              <h6 class="font-weight medium font-size-10 mb-4 mb-lg-7">Chào mừng đến của hàng BookWorm</h6>
              <p class="font-weight-medium font-italic">“Thiên đường trong thế giới tưởng tượng”</p>
            </div>
            <div class="mb-4 pb-xl-1 ml-xl-4">
              <h6 class="font-weight-medium font-size-4 mb-4">Chúng tôi là ai?</h6>
              <p class="font-size-2">Của hàng BookWorm trực thuộc Trường đại học sư phạm kỹ thuật Hưng Yên là Nhà xuất bản tổng hợp có chức năng xuất bản sách và văn hóa phẩm phục vụ thiếu nhi và các bậc phụ huynh trong cả nước, quảng bá và giới thiệu văn hóa Việt Nam ra thế giới.
                Nhà xuất bản có nhiệm vụ tổ chức bản thảo, biên soạn, biên dịch, xuất bản và phát hành các xuất bản phẩm có nội dung: giáo dục truyền thống dân tộc, giáo dục về tri thức, kiến thức… trên các lĩnh vực văn học, nghệ thuật, khoa học kỹ thuật nhằm cung cấp cho các em thiếu nhi cũng như các bậc phụ huynh các kiến thức cần thiết trong cuộc sống, những tinh hoa của tri thức nhân loại nhằm góp phần giáo dục và hình thành nhân cách thế hệ trẻ.
                Đối tượng phục vụ của Nhà xuất bản là các em từ tuổi nhà trẻ mẫu giáo (1 đến 5 tuổi), nhi đồng (6 đến 9 tuổi), thiếu niên (10 đến 15 tuổi) đến các em tuổi mới lớn (16 đến 18 tuổi) và các bậc phụ huynh.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-5 mb-lg-7">
        <div class="d-md-flex align-items-center justify-content-between px-xl-10">
          <div class="text-center mb-3 mb-md-0">
            <div class="font-size-12 font-weight-medium ml-lg-2">5</div>
            <span class="font-size-4">Nhà cung cấp</span>
          </div>
          <div class="text-center mb-3 mb-md-0">
            <div class="font-size-12 font-weight-medium ml-2">100+</div>
            <span class="font-size-4">Tổng số sách</span>
          </div>
          <div class="text-center mb-3 mb-md-0">
            <div class="font-size-12 font-weight-medium ">1M+</div>
            <span class="font-size-4">Lượt mua</span>
          </div>
          <div class="text-center mb-0">
            <div class="font-size-12 font-weight-medium ml-2">3</div>
            <span class="font-size-4">Nhân viên</span>
          </div>
        </div>
      </div>
      <div class="mb-5 mb-lg-10">
        <h6 class="font-weight-medium font-size-7 mb-5 mb-lg-6">Tại sao nên lựa chọn chúng tôi</h6>
        <ul class="list-unstyled my-0 list-features row d-md-flex">
          <li class="list-feature mb-5 mb-lg-0 col-md-6 col-lg-3">
            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
              <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                <i class="glyph-icon flaticon-delivery"></i>
              </div>
              <div class="media-body text-center text-md-left">
                <h4 class="feature__title font-size-3 text-dark">Miễn phí giao hàng</h4>
                <p class="feature__subtitle m-0 text-dark">Miễn phí vận chuyển cho đơn hàng từ 100.000 VND</p>
              </div>
            </div>
          </li>
          <li class="list-feature  mb-5 mb-lg-0 col-md-6 col-lg-3">
            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
              <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                <i class="glyph-icon flaticon-credit"></i>
              </div>
              <div class="media-body text-center text-md-left">
                <h4 class="feature__title font-size-3 text-dark">Thanh toán</h4>
                <p class="feature__subtitle m-0 text-dark">Nhiều phương thức thanh toán, linh hoạt</p>
              </div>
            </div>
          </li>
          <li class="list-feature  mb-5 mb-md-0 col-md-6 col-lg-3">
            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
              <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                <i class="glyph-icon flaticon-warranty"></i>
              </div>
              <div class="media-body text-center text-md-left">
                <h4 class="feature__title font-size-3 text-dark">Hỗ trợ hoàn trả</h4>
                <p class="feature__subtitle m-0 text-dark">Chúng tôi sẵn sàng hoàn trả tiền nếu sản phẩm có sai phạm</p>
              </div>
            </div>
          </li>
          <li class="list-feature  mb-5 mb-md-0 col-md-6 col-lg-3">
            <div class="media flex-column align-items-center align-items-md-start pr-xl-3">
              <div class="feature__icon font-size-14 text-primary text-lh-xs mb-3">
                <i class="glyph-icon flaticon-help"></i>
              </div>
              <div class="media-body text-center text-md-left">
                <h4 class="feature__title font-size-3 text-dark">24/7 Hỗ trợ</h4>
                <p class="feature__subtitle m-0 text-dark">Luôn luôn lắng nghe, lâu lâu thì trả lời</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>

@stop