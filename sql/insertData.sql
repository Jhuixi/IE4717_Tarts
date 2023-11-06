use mysql;

create table tarts
( productid int unsigned not null auto_increment primary key,
  productname char(50) not null,
  category char(50) not null,
  price float(6,2) not null,
  productdesc varchar(255)
);

insert into tarts values
(1, "Chocolatie","classie", 7.80, "This exquisite dessert is renowned for its luxurious, silky texture and a flavor that's a true delight for chocolate aficionados. Crafted with a crumbly, buttery pastry base, it showcases a perfect balance with its rich, creamy chocolate filling. The taste experience harmonizes sweetness with deep, cocoa-infused notes, delivering a lasting sensation of premium indulgence. Garnished with a delicate dusting of cocoa powder and a scattering of vibrant raspberries, our chocolate tart is a sensory masterpiece, skillfully uniting flavors and textures that will captivate your discerning palate."),
(2, "Yamiee","classie", 6.80, "Discover our mouthwatering yam tart. This delectable dessert is celebrated for its exceptional, velvety texture and an irresistible flavor that's bound to please yam enthusiasts. With a crumbly, buttery pastry base, it harmonizes beautifully with the rich, creamy yam filling. The taste experience is a symphony of sweetness and yam's earthy notes, leaving a lasting impression of pure, homely comfort."),
(3, "Jack-o'-Lantern","classie", 7.80, "Indulge in the warmth and coziness of autumn with our enticing pumpkin spice tart, now offered in our shop. This delightful dessert boasts a sublime, velvety texture and a flavor profile that captures the essence of the season. Featuring a delicate, crumbly pastry base, it beautifully complements the rich, spiced pumpkin filling. The taste is a delightful dance of sweetness and aromatic pumpkin spices, leaving a comforting, lingering taste of fall. "),
(4, "Lemonie Blossom", "frutie", 6.20, "Introducing our zesty lime tart, a captivating treat that is celebrated for its refreshing, tangy texture and a flavor that's a true delight for citrus enthusiasts. Featuring a delicate, crumbly pastry base, it perfectly complements the zingy, creamy lime filling. The taste is a lively fusion of tartness and citrus zest, leaving a tantalizing, refreshing impression. "),
(5, "Berrie Forest","frutie", 8.20, "Savor the essence of summer with our delightful berry tart. This mouthwatering dessert showcases a burst of vibrant colors, a luscious texture, and an irresistible berry flavor that's bound to delight fruit enthusiasts. With a crumbly, buttery pastry base, it complements the rich, fruity berry filling perfectly. The taste experience is a harmonious blend of sweetness and the natural tartness of assorted berries, leaving a refreshing, lasting impression. "),
(6, "Be Peachie","frutie", 8.20, "Embrace the sweetness of summer with our exquisite peach tart. Featuring a delicate, crumbly pastry base, it beautifully complements the lush, peachy filling. The taste is a delightful balance of sweetness and the natural, sun-kissed notes of peaches, leaving a warm, comforting impression."),
(7, "Green Sunset","frutie", 8.80, "Indulge in the delightful sweetness of our muscat tart, a tantalizing dessert that's a true celebration of this luscious fruit. With a delicate, flaky pastry base, it perfectly complements the vibrant muscat filling, which bursts with juicy goodness. The taste is a harmonious blend of the muscat's natural sweetness, a touch of tartness, and a hint of floral notes, leaving a refreshing, lasting impression. "),
(8, "Sparkie Pink","frutie", 8.20, "Explore the captivating allure of our fig tart. With a crumbly, buttery pastry base, it harmonizes perfectly with the rich, figgy filling. The taste experience is a delightful blend of the fruit's natural sweetness and a hint of warm, nutty undertones, leaving a lasting impression of Mediterranean delight."),
(9, "Wallie's Favourite","nuttie", 8.20 , "Indulge in the rich, nutty goodness of our walnut tart. This enticing dessert is renowned for its buttery, crumbly texture and a flavor profile that pays homage to the earthy sweetness of walnuts. With a crumbly, buttery pastry base, it complements the rich, nutty walnut filling beautifully. The taste is a symphony of sweetness and the deep, aromatic notes of walnuts, leaving a lasting impression of warm comfort."),
(10, "Hazelnut Dream","nuttie", 8.20, "Discover the delight of our hazelnut tart, a treasure trove of nutty flavor. Featuring a delicate, crumbly pastry base, it harmonizes beautifully with the rich, nutty hazelnut filling. The taste experience is a perfect balance of sweetness and the warm, roasted nuances of hazelnuts, leaving a lasting impression of indulgent satisfaction."),
(11, "Everything Pistachio","nuttie", 9.20, "Treat your taste buds to the exotic allure of our pistachio tart. This captivating dessert boasts a smooth, pistachio-infused texture and a flavor profile that celebrates the subtle sweetness and nuttiness of pistachios. With a crumbly, buttery pastry base, it beautifully complements the rich, nutty pistachio filling. The taste is a harmonious blend of sweetness and the distinctive, slightly salted notes of pistachios, leaving a lasting impression of Mediterranean charm."),
(12, "Surprise Me!","minie", 22.80, "Having trouble deciding on a flavor? Leave the choice to us! With our mini tarts, you can explore a variety of flavors without fear!");