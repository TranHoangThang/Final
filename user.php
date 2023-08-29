<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <met#aeb3b8et="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="style4.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="sticky cao trai">
                    <div class="avatar">
                        <img class="anh" src="phuanh/user.png" alt="Image">
                        <a href="logout.php" class="logout-button" id="lol">LogOut</a>
                        <h1 class="name">Xin chào <span> <?php echo $_SESSION["user"]; ?></span>!!!!</h1>
                        <div style="height: 22px;">
                            <h4 class="auto-type"></h4>
                            <div class="auto-type2">Chào mừng bạn đến với website của chúng tôi</div>
                        </div>
                        <nav id="navbar" class="anh3">
                            <a href="user.php"><i style= font-size:100%  class="fa-solid fa-user"></i></a><!--của Phếu-->
                            <a href="index1.php"><i class="fas fa-briefcase"></i></a> <!--Tấn-->
                            <a href="Class.php"><i class="far fa-file"></i></a>
                            <a href="progesslevel2.php"><i class="far fa-address-card"></i></a>
                          </nav>
                    </div>
                </div>

                <div class="giua">

                    <section class="gioithieu wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title gioithieu2">Điều khoản sử dụng website</h1>
                        <div class="title2">
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>1. Quy định chung</h5>
                                <p>Điều khoản Sử dụng quy định các điều khoản ràng buộc bạn khi sử dụng các Dịch vụ. Thuật ngữ “Bạn” và/hoặc “Người sử dụng” sau đây được gọi chung để chỉ tới những người sử dụng các Dịch vụ. Vui lòng nghiên cứu kỹ và lưu lại một bản Điều khoản Sử dụng này.</p>
                                <p>Bằng việc ghé thăm website và sử dụng các Dịch vụ, Bạn đồng ý bị ràng buộc với Điều khoản Sử dụng này, Chính sách Quảng cáo và Chính sách Bảo mật của chúng tôi.</p>
                                <p>Chúng tôi thực hiện Điều khoản Sử dụng này, Chính sách Quảng cáo và Chính sách bảo mật theo quy định của pháp luật hiện hành và không nội dung nào trong các tài liệu trên cản trở quyền của chúng tôi tuân thủ các quy định hoặc yêu cầu của chính phủ, tòa án, cơ quan thi hành án liên quan đến việc Bạn sử dụng các Dịch vụ hoặc thông tin do chúng tôi nhận được hoặc thu được từ việc sử dụng các Dịch vụ của Bạn.</p>
                            </div>
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>2. Từ chối bảo đảm</h5>
                                <p>Website và các Dịch vụ được cung cấp dựa trên nguyên tắc không bảo hành, trên cơ sở dịch vụ và tính năng sẵn có mà Chúng tôi không đảm bảo rằng các tính năng trên website hoặc các Dịch vụ sẽ đáp ứng các yêu cầu của Bạn hoặc đảm bảo rằng sự vận hành các phần mềm hoặc các Dịch vụ sẽ không bị gián đoạn hoặc bị lỗi.</p>
                                <p>Chúng tôi không chịu trách nhiệm đối với bất kỳ sự mất mát dữ liệu, tổn thất lợi ích nào hoặc các vấn đề khác liên quan đến việc truy cập website và sử dụng các Dịch vụ, bao gồm nhưng không giới hạn đến tất cả các thông tin, dữ liệu, văn bản, phần mềm, âm nhạc, âm thanh, hình ảnh, đồ họa, video, thông điệp hoặc các nguyên liệu khác (“Nội dung”) mà Bạn có thể lưu giữ, đưa lên, hoặc truyền tải thông qua Dịch vụ. Bạn đồng ý sử dụng các Dịch vụ với tất cả sự rủi ro.</p>
                            </div>
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>3. Thay đổi điều khoản sử dụng</h5>
                                <p>Chúng tôi giữ quyền thay đổi và/hoặc sửa đổi mà không cần báo trước bất kỳ điều khoản nào trong Điều khoản Sử dụng này tùy từng thời điểm. Những sự thay đổi và/hoặc sửa đổi như vậy sẽ có hiệu lực ngay khi đăng lên website. Nếu Bạn tiếp tục truy cập hoặc sử dụng các Dịch vụ sau khi các thay đổi và/hoặc sửa đổi được đăng lên, Bạn đã chấp nhận và đồng ý với các thay đổi và/hoặc sửa đổi đó.</p>
                            </div>
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>4. Quy định sử dụng dịch vụ</h5>
                                <p>Khi sử dụng Dịch vụ của chúng tôi, bên cạnh việc phải ký hợp đồng dịch vụ theo mẫu do chúng tôi ban hành, Bạn còn bị ràng buộc phải chấp thuận và tuân thủ các điều kiện quy định dưới đây:</p>
                                <ul>
                                    <li>Thanh toán phí dịch vụ theo thỏa thuận</li>
                                    <li>Tuân thủ quy định của pháp luật</li>
                                    <li>Các tranh chấp xảy ra nếu có do hai bên thỏa thuận giải quyết trên cơ sở hợp tác và thỏa thuận.</li>
                                </ul>
                            </div>
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>5. Quy định về đăng kí, sử dụng tài khoản và thanh toán phí dịch vụ</h5>
                                <p>Chúng tôi cung cấp các Dịch vụ cho Bạn hoàn toàn thông qua hệ thống trực tuyến của Website từ khi Bạn bắt đầu đăng ký tài khoản, lựa chọn dịch vụ cũng như tiến hành thanh toán phí dịch vụ mà Bạn sử dụng Dịch vụ của Chúng tôi.</p>
                                <p>Bạn xác nhận và đồng ý rằng Bạn đã nghiên cứu kỹ càng và sẽ tuân thủ đầy đủ các quy định về đăng ký tài khoản, phương thức tính phí và thanh toán chi phí được đăng trên Website của chúng tôi (“Quy định về Đăng ký và Sử dụng Dịch vụ”). Bằng việc Bạn xác nhận hoàn thành thủ tục đăng ký tài khoản trên website, Bạn đã chấp nhận bị ràng buộc thực hiện đối với các Quy định về Đăng ký và Sử dụng Dịch vụ như vậy khi Bạn sử dụng các Dịch vụ.</p>
                                <p>Chúng tôi luôn thay đổi và/hoặc sửa đổi nội dung Điều khoản Sử dụng này cũng như các Quy định về Đăng ký và Sử dụng Dịch vụ với mục đích hoàn thiện tốt nhất nội dung các quy định và đáp ứng tối đa sự tiện dụng và hiệu quả khi Bạn sử dụng các Dịch vụ cũng như đảm bảo nâng cao lợi ích của Chúng tôi khi cung cấp các Dịch vụ.</p>
                                <p>Chúng tôi giữ quyền nhưng không có nghĩa vụ thông báo tới Bạn đối với bất kỳ sự thay đổi và/hoặc sửa đổi các Quy định về Đăng ký và Sử dụng Dịch vụ. Những sự thay đổi và/hoặc sửa đổi như vậy sẽ có hiệu lực ngay khi đăng lên Website. Nếu Bạn tiếp tục sử dụng các Dịch vụ sau khi các thay đổi và/hoặc sửa đổi được đăng lên, Bạn đã chấp nhận và đồng ý với các thay đổi và/hoặc sửa đổi đó. Chúng tôi khuyến nghị Bạn thường xuyên kiểm tra trên Website và liên hệ với nhân viên hỗ trợ của Chúng tôi để có được bản cập nhật các Quy định về Đăng ký và Sử dụng Dịch vụ mới nhất.</p>
                            </div>
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>6. Giới hạn trách nhiệm</h5>
                                <p>Bạn xác nhận và đồng ý rằng chúng tôi chỉ sẵn sàng cung cấp các Dịch vụ nếu Bạn đồng ý giới hạn trách nhiệm của chúng tôi đối với Bạn và các bên thứ ba. Bạn đồng ý rằng Bạn chịu trách nhiệm bồi thường duy nhất và toàn bộ đối với bất kỳ khiếu nại, khiếu kiện nào tới chúng tôi liên quan đến bất kỳ sự vi phạm quy định sử dụng nào do việc Bạn sử dụng các Dịch vụ hoặc ngừng sử dụng Dịch vụ của chúng tôi.</p>
                                <p>Bạn đồng ý tự chịu trách nhiệm với các nội dung và thông tin cung cấp cho chúng tôi</p>
                                <p>Bạn đồng ý bảo vệ, bồi thường và giữ cho chúng tôi và các công ty liên kết của chúng tôi và mỗi nhân viên, giám đốc, người lao động, đại lý, đại diện, người cung cấp thông tin và bên cấp phép của chúng tôi không bị tổn hại bởi bất kỳ khiếu nại, khiếu kiện, chi phí, tổn thất, thiệt hại, phán quyết của tòa án và phí tổn nào, bao gồm nhưng không giới hạn phí luật sư, phí bồi thường thiệt hại, chi phí tố tụng, lãi chậm trả liên quan đến hoặc phát sinh từ bất kỳ khiếu nại, mâu thuẫn, tranh chấp, thủ tục tố tụng pháp lý tại Tòa án hoặc các tổ chức Trọng tài, tổ chức Hòa giải, các quyết định của cơ quan Nhà nước có thẩm quyền … liên quan đến hoặc phát sinh từ các sản phẩm và dịch vụ. Chúng tôi giữ quyền, bằng chi phí của mình, đảm nhận hoàn toàn việc bảo vệ và kiểm soát (nhưng không có trách nhiệm) đối với bất kỳ vấn đề nào phát sinh như vậy tùy thuộc vào sự bồi thường của Bạn.</p>
                            </div>
                            <div class="title3 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="bi bi-arrow-right arrow" style="top: -5px; left: -50px;"></span>
                                <h5>7. Điều khoản khác</h5>
                                <p><strong>Luật điều chỉnh</strong></p>
                                <p>Điều khoản Sử dụng này được điều chỉnh bởi và giải thích phù hợp với pháp luật Việt Nam. Nếu bất kỳ điều khoản nào trong Điều khoản Sử dụng này không hợp pháp, vô hiệu hoặc vì bất kỳ lý do nào không thể thực hiện được, thì điều khoản đó sẽ được xem là tách rời khỏi Điều khoản Sử dụng này và không ảnh hưởng đến hiệu lực và tính thực thi của bất kỳ điều khoản còn lại nào của Điều khoản Sử dụng này.</p>
                                <p><strong>Chấm dứt</strong></p>
                                <p>Điều khoản Sử dụng này có hiệu lực cho đến khi bị chấm dứt bởi Bạn hoặc bởi chúng tôi theo các trường hợp sau đây:</p>
                                <p>Chấm dứt bởi Bạn: Bạn có thể chấm dứt Điều khoản Sử dụng này bằng cách không sử dụng các Dịch vụ nữa.</p>
                                <p>Chấm dứt bởi chúng tôi: Điều khoản Sử dụng này chấm dứt ngay lập tức mà chúng tôi không cần phải thông báo trước nếu (i) theo sự quyết định của chúng tôi, Bạn không tuân thủ bất kỳ điều khoản nào của Điều khoản Sử dụng này hoặc (ii) Pháp luật hoặc quyết định của chính phủ, tòa án, cơ quan thi hành án yêu cầu chúng tôi chấm dứt Điều khoản Sử dụng.</p>
                            </div>
                        </div>
                    </section>
                    
                    <section class="gioithieu wow fadeInUp" data-wow-delay="0.1s" id="contact">
                        <h1 class="title gioithieu2">Liên hệ</h1>
						<p class="mb-4">Mọi thắc mắc, ý kiến, phàn nàn xin hãy làm theo biễu mẫu sau, chúng tôi sẽ cố gắng hỗ trợ và liện hệ sớm nhất có thể.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-secondary" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-secondary" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-secondary" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>

        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="user.js"></script>
        <script src="https://kit.fontawesome.com/6881fbc8f6.js" crossorigin="anonymous"></script>
    </body>
</html>