  <title>My beatifull Books</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/normalize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front_end/icomoon/icomoon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('cairo/Cairo-VariableFont_slnt,wght.ttf') }}">

  <style>
      @font-face {
          font-family: 'Cairo';
          src: url('/cairo/Cairo-VariableFont_slnt,wght.ttf') format('truetype');
          font-weight: 100 900;
          font-style: normal;
      }

      body {
          font-family: 'Cairo', sans-serif;
      }


      .banner-image {
          width: 359px;
          height: 572px;
          object-fit: cover;
          border-radius: 8px;
      }

      .product-item {
          width: 100%;
          height: 100%;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          align-items: center;
          padding: 15px;
          border: 1px solid #eee;
          border-radius: 8px;
          background-color: #fff;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
          min-height: 500px;
          /* You can adjust this height */
      }

      .product-style {
          width: 100%;
          height: 300px;
          overflow: hidden;
          margin-bottom: 10px;
      }

      .product-style img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 5px;
      }

      figcaption {
          text-align: center;
          flex-grow: 1;
      }

      figcaption h3 {
          font-size: 1.1rem;
          margin: 10px 0 5px;
      }

      figcaption span {
          font-size: 0.95rem;
          color: #777;
      }

      .item-price {
          font-weight: bold;
          margin-top: 10px;
          color: #333;
      }

      .add-to-cart {
          margin-top: 10px;
          padding: 6px 12px;
          background-color: #f4b400;
          border: none;
          color: white;
          cursor: pointer;
          border-radius: 4px;
      }

      .add-to-cart:hover {
          background-color: #d39e00;
      }
  </style>
