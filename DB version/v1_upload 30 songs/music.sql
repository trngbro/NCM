-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'USER',
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `user_type`, `password`, `name`) VALUES
('admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin page'),
('nguyentrungnghiacmp528@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Trung Nghĩa');

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `number` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `likes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `singer` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `lyrics` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL DEFAULT 'Nhạc, NCM',
  `view` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `name`, `singer`, `music`, `cover`, `lyrics`, `tag`, `view`) VALUES
(1, '1 Phút', 'Andiez', '637af250a829c.mp3', '637af250a829e.jpg', 'Đã bao lâu lòng này anh chẳng nói\r\nNói với em ngàn lời anh cất giữ trong tim\r\nLần này đến lần khác đôi môi cứ lãng phí chẳng nói gì\r\nChỉ biết cạnh em dù cho em chẳng để ý\r\nVà rồi em đã có người em yêu\r\nMỉm cười cho qua hết đi\r\nPhải chăng là do người đến s', '1 Phút , Andiez , Indie , Nhạc Trẻ', 0),
(2, '11h11', 'Thái Đinh', '637af28504fbf.mp3', '637af28504fc4.jpg', 'Màn đêm xuống\nTừng hồi chuông\nNgập ngừng buông\nMình anh lặng giữa những cách xa\nEm à , mỗi giây , vụt qua…\nEm có còn … nhớ thương anh thật nhiều\n\nTừng hồi ức , còn thao thức\nThầm hình dung , ở phương trời đó chắc em đang , ngắm nhìn , đắm chìm vào', '11h11 , Thái Đinh , Indie , Nhạc trẻ', 0),
(3, 'Bảy bước tới mùa hè', 'Đào Líuloo', '637af305c1214.mp3', '637af305c1216.jpg', 'Biết bao giờ cho tới mùa hè\r\nTrong sân trường tràn tiếng ve\r\nNắng tô vàng đôi cánh nhỏ xinh\r\nBên hiên nhà em lắng nghe\r\nTiếng chim hót líu lo\r\nTiếng đùa vui khắp nơi\r\nCánh đồng thơm hương lúa\r\nAi tô một màu vàng\r\nBiết bao giờ cho tới ngày xưa\r\nEm vẫn còn ', 'Bảy bước tới mùa hè , Đào Líuloo, Indie , Nhạc trẻ', 0),
(4, 'Bụi hoa giấy', 'Trang', '637af367151dc.mp3', '637af367151df.jpg', 'Bụi hoa giấy hiên nhà lắng nghe\r\nTiếng mưa ru dịu dàng\r\nMùa hè sắp quay về với tôi\r\nTrong giấc mơ chỉ toàn người khóc\r\nNgười vui\r\nNgười điên\r\nTrên áng mây cao là hoàng hôn\r\nThổn thức tim tôi\r\nNhững ngày qua tôi ngồi lặng thinh\r\nCùng mấy cuốn sách dở dang ', 'Bụi hoa giấy , Trang , Indie , Nhạc trẻ', 0),
(5, 'Chà đào', 'Thế Bảo, Gọi là Phúc', '637af3ca00c58.mp3', '637af3ca00c5d.jpg', 'Lê đôi chân lãng du bơ vơ\r\nMột sáng ngu ngơ tìm ai nghe chuyện đời ta\r\nThong dong cứ bước đi chẳng mang vội vã\r\nMây nương theo gió lây đung đưa\r\nVề quán thân quen từ những câu chuyện ngày xưa\r\nEm như tia nắng mai chợt len qua ô cửa\r\nXao xuyến tâm hồn anh\r', 'Chà đào , Thế Bảo , Gọi là Phúc , Indie , Nhạc trẻ', 0),
(6, 'Chắc anh đang', 'Tiên Tiên, Trang', '637af414f3950.mp3', '637af414f3954.png', 'Chắc anh đang ngủ vùi đâu đó\r\nTrong làn nắng thu vơi đầy\r\nChắc anh đang lạc đường quanh co\r\nKhi mặt trời xuống\r\nChắc anh đang tìm niềm vui mới\r\nBên hình bóng ai xa lạ\r\nNhững phút giây lạnh lùng chơi vơi\r\nKhi em nơi đây một mình\r\nVà rồi em biết để làm gì\r\n', 'Chắc anh đang , Tiên Tiên , Trang , Indie', 0),
(7, 'Cho tôi tình yêu', 'Denn', '637af4546d32b.mp3', '637af4546d32f.jpg', 'Mặt trời lấp ló trên ô cửa sổ\r\nNgày đang tới trong những câu chuyện\r\nNhẹ nhàng em hát vu vơ đôi lời\r\nLòng tôi ngây ngất say mê bồi hồi\r\nCứ thế tôi nhớ nhung nụ cười\r\nCứ thế tôi vấn vương điệu nhạc\r\nChỉ một giây rơi vào ánh mắt\r\nLà cả thế giới thôi xoay vò', 'Cho tôi tình yêu , Denn , Indie , Nhạc trẻ', 0),
(8, 'Chơi vơi', 'Thái Đinh, NamKun', '637af4944767a.mp3', '637af4944767e.jpg', 'Con đường xa dường như vội vã\r\nIn dấu chân bao nhiêu người qua\r\nTa tìm nhau giữa những mùa cũ\r\nYêu dấu xa theo cơn mưa cuối thu\r\nĐôi bàn tay giờ hao gầy lắm\r\nĐông đã sang hay tim anh lạnh căm\r\nTa lặng câm trong những vụn vỡ\r\nMùa yêu đã xa cho con tim anh ', 'Thái Đinh , NamKun , Nam Kun , Chơi vơi , Indie , Nhạc trẻ', 0),
(9, 'Chuyện Thu', 'Minh Cà Ri, Huy Lê', '637af4cb21891.mp3', '637af4cb21894.jpg', 'Mây lặng ôm giấc mơ\r\nGió từng cơn khẽ ru\r\nLá rơi vàng một chiều Cư Xá\r\nMùa thu.\r\nĐôi bàn tay thoáng lơi\r\nMà vô tình lạc mất nhau\r\nMột đời\r\nNụ cười lúc xưa\r\nGiờ phai nhòa theo tiếng mưa.\r\n\r\nChorus:\r\nCon đường ta đã qua\r\nMà sao giờ đây hóa lạ\r\nAnh nhớ vòng ', 'Chuyện Thu , Minh Cà Ri , Huy Lê', 0),
(10, 'Có gì đâu', 'NamKun', '637af51386875.mp3', '637af5138687a.jpg', 'Và mình chia tay\r\nAnh đâu có biết sẽ ra thế này\r\nĐâu đó ngoài kia thằng Kiên đang hát khi hôm nay thành ngày xưa (và bầu trời luôn)\r\nTa qua được chuyện này chưa hay thêm một vài ngày nữa\r\nLy Lipton sữa trên bàn giờ được thay thế bởi một cốc cà phê nâu\r\nAn', 'Có gì đâu , NamKun , Nam Kun , Indie , Nhạc trẻ', 0),
(11, 'Có những chiều', 'Thái Đinh, Minh Cà Ri', '637af593af1f9.mp3', '637af593af1fb.jpg', 'Rồi một chiều cuối thu\r\nGió may\r\nThả vào nỗi nhớ\r\nHao gầy\r\nBản nhạc nơi quán quen\r\nCất lên\r\nChuyện tình xưa cũ.\r\n\r\nGiọt cà phê khẽ rơi\r\nVỡ đôi\r\nChiếc phin đậm đen\r\nĐắng buồn\r\nChuyện tình ai vỡ tan\r\nChiếc ôm\r\nDở dang.\r\n\r\n\r\nChorus\r\nLiệu rằng em có nhớ về an', 'Có những chiều , Thái Đinh , Minh Cà Ri', 0),
(12, 'Đâu có sao', 'Judian, Haohinh', '637af5eb9f4f0.mp3', '637af5eb9f4f3.jpg', 'Lang thang tới lui chẳng đến đâu\r\nVì đâu cũng là thế\r\nYêu đương cũng chẳng đến đâu\r\nThì thôi ta một mình\r\nĐời là thế ngày dài thế\r\nChỉ một mình thôi\r\nĐời là thế người là thế\r\nThì thôi đến đây thôi\r\nĐâu có sao mà\r\nTình yêu giờ đây quá mệt\r\nĐâu có chi mà\r\nG', 'Đâu có sao, Judian , Haohinh', 0),
(13, 'Đông kiếm em', 'Vũ', '637af642a773b.mp3', '637af642a7740.jpg', 'Tôi hát cho màu xanh mãi xanh\r\nCho một người lặng im biết yêu\r\nVà tôi viết cho mùa yêu xốn xang\r\nCho một đời nhớ thương vẹn nguyên\r\nCô đơn đến thế\r\nMưa rơi lách tách kì cục đợi ai\r\nSâu trong ánh mắt\r\nTôi ngu ngơ mơ thời gian dừng trôi\r\nCòn lại đây nhớ mon', 'Đông kiếm em , Vũ , Indie , Nhạc trẻ', 0),
(14, 'Em', 'NamKun', '637af674c8227.mp3', '637af674c822a.png', 'Anh, ngồi vẽ nên từng giấc mơ\r\nKhẽ đắm chìm trong những khúc nhạc còn vẩn vơ\r\nNgày trôi những câu hát êm đềm\r\nKhi anh viết lên tên EM\r\nEm, nhiều nghĩ suy chẳng nói nên\r\nDù có lúc môi buông lời thở than vì mỏi mệt\r\nDù ngày trôi nhiều giây buồn đau\r\nVà nhữn', 'Em , NamKun , Nam Kun , Indie , Nhạc trẻ', 0),
(15, 'Gió vẫn hát', 'Long Phạm', '637af6bf412e9.mp3', '637af6bf412ec.jpg', 'Thương thì thương thế thôi\r\nBiết bao đêm dài lòng anh ngóng trông\r\nỞ nơi ấy phía xa xa đại dương\r\nTrái đất vẫn xoay vẫn xoay tròn hai người yêu nhau\r\nChờ mong đến một ngày thuộc về nhau\r\nAnh vẫn đứng đây bên khung cửa sổ\r\nAnh vẫn đứng đây chờ nắng lên\r\nCò', 'Gió vẫn hát , Long Phạm , Indie , Nhạc trẻ', 0),
(16, 'Gửi chúng ta năm nào', 'Cao Minh', '637af7053b16a.mp3', '637af7053b16e.jpg', 'Tháng năm vội vã\r\nTa bỏ lỡ bao điều\r\nMàu hoàng hôn năm ấy đã phai đi nhiều\r\nTháng năm đẹp nhất\r\nEm bỏ lỡ một người\r\nĐã từng cùng nắm tay đi qua cơn mưa\r\nChàng trai ấy nở nụ cười trong nắng mai\r\nNhìn người con gái tựa đầu bên vai\r\nMình từng hứa tận cùng mu', 'Gửi chúng ta năm nào , Cao Minh , Indie', 0),
(17, 'Không tên', 'Trang, Khoa Vũ', '637af7682337e.mp3', '637af76823381.jpg', 'Ngày cuối tháng năm\r\nTrời sa mưa nhẹ\r\nVà ngày sao quá đỗi dài\r\n\r\nTàn thuốc đã rơi\r\nMà anh chưa về\r\nLần theo làn khói cũ mờ xa\r\n\r\nTừng phút đắn đo\r\nMình em nơi tháng ngày\r\nĐã cuốn đi những chiều ai về\r\nĐầu phố đón đưa\r\nBàn tay dịu hiền\r\nVà nắng thẹn thùng ', 'Không tên, Trang, Khoa Vũ', 0),
(18, 'Lá thư', 'Tùng', '637af79f7392d.mp3', '637af79f73930.jpg', 'Em hôm nay anh mua\r\nCon tem vài đồng thôi\r\nĐể gửi vài điều đến nơi xa xôi\r\nĐể chờ một điều ở nơi xa xôi\r\nXem ra hôm nay mưa\r\nTivi bảo là ngày giông\r\nMột ngày bình thường nhớ mong\r\nCũng chả làm gì\r\nViết cho em vài dòng\r\nEm sớm nay có thức giấc\r\nNhư mọi ngà', 'Lá thư , Tùng, Indie , Nhạc trẻ', 0),
(19, 'Lấm Lem', 'Hải Sâm', '637af7e914945.mp3', '637af7e91494f.jpg', 'Anh về\r\nThầm mong nhớ màu hoàng hôn lấm lem\r\nHay câu ca đã cũ mềm\r\nVẫn chưa từng\r\nCùng em trên những con đường\r\nEm về\r\nĐừng mong nhớ nhiều về những giấc mơ\r\nXin cho anh những thẫn thờ\r\nGiấu trong lòng\r\nMà em chưa nói bao giờ\r\nVà nếu lúc ấy\r\nXin người đừng', 'Lấm Lem , Hazy , Hải Sâm , Indie', 0),
(20, 'Làm một chiếc trà sữa không', 'NamKun', '637af890365c3.mp3', '637af890365c7.jpg', 'Một ngàу trên môi em nụ cười bỗng tan biến\r\nƁộ mặt chợt toát mỗi 2 chữ đó là ưu phiền\r\nƁầu trời như xám đen\r\nLòng anh u ám thêm\r\nϹhợt hiện suу nghĩ , làm một chiếc trà sữa không ?\r\nƁ\r\nMột ngàу khi nỗi buồn em chợt xanh như cành lá\r\nHoặc chỉ là do làm chưa', 'Làm một chiếc trà sữa không , NamKun , Nam Kun , Indie , Nhạc trẻ', 0),
(21, 'Loanh Quanh', 'Mademoiselle', '637af8d23ef99.mp3', '637af8d23ef9c.png', 'Có một chiều tôi đi theo anh\r\nLoanh quanh loanh quanh đi khắp phố phường\r\nThì thầm đọc tên những con đường\r\nGió lùa qua mái tóc xem nắng nhuộm vàng trên hàng cây già\r\nBước từng bước thật chậm\r\nAnh không muốn dừng chân còn tôi chưa muốn về nhà\r\nCũng mặt tr', 'Loanh Quanh , Mademoiselle , Indie , Nhạc trẻ', 0),
(22, 'Lời thì thầm của gió', 'Cheng', '637af913c3b46.mp3', '637af913c3b4a.jpg', 'Anh nhờ con phố\r\nGiữ giùm anh bao nhiêu ngày thơ\r\nEm về đây không nói đi...anh còn chờ\r\nKìa những giấc mơ vẫn đòi vỗ về\r\nBởi tim anh chưa thể\r\ncài then nỗi nhớ cho đêm dài thôi chẳng còn bất ngờ.\r\n\r\nTại sao em vội buông cánh tay\r\nKhi vẫn yêu anh như ngày ', 'Lời thì thầm của gió , Cheng', 0),
(23, 'Một đêm say', 'Thịnh Suy', '637af95e88f9f.mp3', '637af95e88fa9.jpg', 'Khi đôi môi em còn đỏ mọng\r\nEm muốn nói em yêu anh\r\nKhi men còn trong hơi thở\r\nLại gần hôn anh đi\r\nKhi con tim không còn trên đầu\r\nKhi hai má em hây hây\r\nEm nói em say tiếng đàn\r\nVậy lại gần hôn anh đi\r\nLại gần hôn anh\r\nAnh sẽ để em mặt trời\r\nLại gần hôn ', 'Một đêm say , X , Thịnh Suy , Indie , Nhạc trẻ', 0),
(24, 'Ngơ Ngác', 'Sulla, Thế Bảo', '637af99990d39.mp3', '637af99990d3d.jpg', 'Em ngơ ngác đứng chờ\r\nAnh ngơ ngác hững hờ\r\nTa ngơ ngác nên lạc nhau mãi\r\nAnh đã hứa nhưng anh chẳng tới\r\nĐể em đứng đợi đợi mãi đợi hoài\r\nEm ngơ ngác giữ lời\r\nNên em vẫn đứng đợi\r\nNhưng không nói cho anh một câu\r\nEm đã hứa sẽ hát như một lời tỏ tình\r\nNên', 'Ngơ Ngác , Sulla , Thế Bảo , Indie , Nhạc trẻ', 0),
(25, 'Tình cũ', 'Harrie', '637af9c842c00.mp3', '637af9c842c02.jpg', 'Người nào đó, em làm cho anh hóa điên lúc này\r\nVài lời nói , đã đánh mất trái tim em rồi\r\nGiờ chia tay, phải làm sao để em quay về\r\nTừ nay, rời xa, em\r\n\r\nNhư trong cơn say, một giây nhớ về\r\nHình bóng em, sao cứ hoài mong nhớ (biết em giờ phương trời nao a', 'Tình cũ , Harrie , Indie , Nhạc trẻ', 0),
(26, 'Tình đầu', 'RHY', '637af9f8bac37.mp3', '637af9f8bac3a.jpg', 'Tình đầu mới chớm thơm ngát hương lòng\r\nĐẹp tựa trái chín đôi má em hồng\r\nRồi tình đắm đuối trong cơn mặn nồng\r\nĐường vào tình ái như ngây như dại\r\nMơ tình yêu mãi men say không phai\r\nSợi buồn đắng ngắt giăng kín môi mềm\r\nTừng giọt nước mắt gội xóa kỷ niệ', 'Tình đầu , RHY , Indie , Nhạc trẻ', 0),
(27, 'Tôi và em', 'Pink Prog', '637afa2937811.mp3', '637afa2937814.jpg', 'Đời buồn, người tìm đến ta\r\nÔi thế giới diệu kỳ, chẳng ai chững lại\r\nĐể khóc cho nỗi buồn em\r\nĐời buồn, người chỉ tìm đến ta\r\nÔi thời gian diệu kỳ, lòng người diệu kỳ\r\nLặng lẽ đổi thay nơi ngày mai\r\nTôi và em giống như hai người điên đang cuồng si\r\nGiữa n', 'Tôi và em , Pink Prog , Indie , Nhạc trẻ', 0),
(28, 'Vạn Kiếp Sau', 'RHY', '637afa634b057.mp3', '637afa634b059.jpg', 'Sau cơn mưa còn lại gì\r\nSau yêu thương còn lại gì\r\nNgoài nước mắt muộn màng\r\nChẳng để làm gì\r\nĐôi lứa chia ly vì đâu\r\nNắng đã tắt trời nhuộm màu\r\nMây âm u đọng buồn sầu\r\nĐành khép hết lòng\r\nVậy mà gió cứ len vào trong nỗi đau\r\nChẳng cần phải tìm đâu ra lý', 'Vạn Kiếp Sau , RHY , Indie , Nhạc trẻ', 0),
(29, 'Về phía mưa', 'Thế Bảo', '637afa9327248.mp3', '637afa932724c.jpg', 'Cũng đã lâu hai ta chẳng bước đi chung trên con phố dài\r\nCũng đã lâu yêu thương anh mang vứt ra ngoài kia\r\nGiấu em vào trong từng giây phút bộn bề\r\nTự mình ngăn dòng ký ức ùa về\r\nMà khi mưa lại rơi, lòng anh vẫn chơi vơi\r\nDòng tin cuối đã xem, cũng đã bao', 'Về phía mưa , Thế Bảo , Indie , Nhạc trẻ', 0),
(30, 'Viết về yêu xa', 'Dịp, Đăng Răng To', '637afac607a55.mp3', '637afac607a59.jpg', 'Yêu xa là thứ giết chết đôi ta vì khoảng cách\r\nTừng ngày từng chiều cuối đông thẫn thờ một mình em\r\nYêu xa là khi nhớ điên lên mà lại xa\r\nTừng dòng từng dòng tin nhắn kia quá phớt lờ với em\r\nĐôi khi trong lòng em thấy biết bao nhiêu là buồn bã\r\nVì dường á', 'Viết về yêu xa , Dịp , Đăng Răng To, Nhạc trẻ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`number`),
  ADD KEY `songs_play` (`id`),
  ADD KEY `accounts_play` (`email`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `play`
--
ALTER TABLE `play`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `accounts_play` FOREIGN KEY (`email`) REFERENCES `accounts` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `songs_play` FOREIGN KEY (`id`) REFERENCES `songs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
