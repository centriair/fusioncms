{{--
replace: href="(\.\/)?([^"]+).html"
with: href="{{ url('$2') }}"

replace: src="\.\/([^"]+).(png|jpg|jpeg)"
with: src="{{ url('theme/$1.$2') }}"

replace: href="{{ url('theme/assets/css/style.css') }}"
with: href="{{ url('theme/assets/css/style.css') }}"
--}}
@php
  $brands = App\Models\Brand::limit(6)->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
  <title>CentriAir</title>
  <link href="{{ url('theme/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <header class="nav-bar">
    <div class="pre-nav-bar bg-blue-primary">
      <div class="w-full md:max-w-screen-lg mx-auto px-4 sm:px-8 text-base flex items-center justify-center gap-x-2 py-2">
        <div>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.48" height="14.039" viewBox="0 0 6.48 14.039">
              <path id="Path_728" data-name="Path 728"
                d="M1787.308,15.809V17.7h-1.47v2.4h1.47v7.05h2.827V20.069h1.973l.21-2.371h-2.183V16.349c0-.559.112-.78.653-.78h1.53v-2.46h-1.958C1788.257,13.109,1787.308,14.035,1787.308,15.809Z"
                transform="translate(-1785.838 -13.109)" fill="#fff" />
            </svg>
          </a>
        </div>
        <div class="separator text-white">|</div>
        <div>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.996" height="16" viewBox="0 0 15.996 16">
              <g id="Group_199" data-name="Group 199" transform="translate(-1816.318 -12.128)">
                <path id="Path_729" data-name="Path 729"
                  d="M1824.461,12.128a7.829,7.829,0,0,0-7.845,7.453c0,.114-.008.228-.008.342a7.733,7.733,0,0,0,1.125,4.025l-1.415,4.18,4.349-1.382a7.862,7.862,0,0,0,11.647-6.823c0-.067,0-.133,0-.2A7.823,7.823,0,0,0,1824.461,12.128Zm0,14.346a6.571,6.571,0,0,1-3.632-1.085l-2.537.809.824-2.434a6.482,6.482,0,0,1-1.258-3.841,6.093,6.093,0,0,1,.033-.636,6.606,6.606,0,0,1,13.151.124c.015.17.022.339.022.512A6.585,6.585,0,0,1,1824.461,26.474Z"
                  fill="#fff" />
                <path id="Path_730" data-name="Path 730"
                  d="M1828.061,21.5c-.2-.1-1.14-.559-1.317-.621s-.305-.1-.434.095-.5.622-.61.747-.224.143-.419.047a5.2,5.2,0,0,1-1.548-.948,5.765,5.765,0,0,1-1.07-1.32c-.11-.191-.011-.294.085-.39s.191-.224.29-.334c.026-.033.048-.063.07-.092a2.336,2.336,0,0,0,.122-.228.346.346,0,0,0-.015-.335c-.048-.1-.434-1.036-.6-1.419s-.319-.316-.434-.316-.239-.018-.367-.018a.709.709,0,0,0-.515.239,2.139,2.139,0,0,0-.673,1.595,2.417,2.417,0,0,0,.1.651,4.336,4.336,0,0,0,.687,1.324,7.905,7.905,0,0,0,3.287,2.885c1.959.762,1.959.508,2.312.475a1.924,1.924,0,0,0,1.3-.908,1.578,1.578,0,0,0,.114-.908C1828.38,21.639,1828.251,21.592,1828.061,21.5Z"
                  fill="#fff" />
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex items-center justify-between gap-x-2 py-4 md:py-8">
      <div class="left-container">
        <a href="{{ url('/') }}">
          <div class="w-24">
            <svg class="w-full h-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 402.04 164">
              <title>CentriAir_MU</title>
              <path
                d="M60.84,86.2q-.53,7.33-5.41,11.55T42.55,102q-8.73,0-13.74-5.88t-5-16.15V77.15A27.25,27.25,0,0,1,26.11,65.6a17.31,17.31,0,0,1,6.6-7.66,18.47,18.47,0,0,1,10-2.67q7.86,0,12.67,4.21t5.56,11.83H51.54c-.23-2.93-1-5.06-2.45-6.38s-3.54-2-6.41-2a8,8,0,0,0-7,3.35q-2.33,3.36-2.39,10.41v3.43q0,7.36,2.24,10.77c1.48,2.27,3.83,3.4,7,3.4q4.35,0,6.48-2C50.46,91,51.27,89,51.48,86.2Z"
                fill="#333" />
              <path d="M133.63,106.35l15.49,21.57-7.48.57c-3-1.61-4.47-6-6.34-8.59q-4.71-6.78-9.41-13.55Z" fill="#00aeef"
                fill-rule="evenodd" />
              <path d="M196.37,106.35h9.27l8.52,8.77c.23.26.46.51.68.77Z" fill="#00aeef" fill-rule="evenodd" />
              <path
                d="M32.18,42.77l6.12-3.25A32.75,32.75,0,0,0,58.47,46v-.19L26.74,29.4l-.45-.57,3.85-1.91c4.15.8,8.21,4.08,11.56,5.92L69.12,47.16l15.56,2.29H37.45c-4.51-2-9.87-3.64-13.2-2.87-1.92.45-3.35,1.86-5.11,2.87H15L.23,41.62,0,41.24l11.78-5.16C15.68,37.9,25.19,44.3,32.18,42.77Z"
                fill="#00aeef" fill-rule="evenodd" />
              <path
                d="M173.43,49.45l.17-.77h-.46l-25.61-4.2q1.14-2.28,2.27-4.58l21.76,3.82L170,42.19c-1.44-2-14.87-4.06-18.81-4.39a3.62,3.62,0,0,1,1.13-2.1l4.76,1-.22-.58q-1.71-1.52-3.4-3c.22-.45.45-.89.68-1.34l4.76.77-.68-.58c-2.25-3.65-6.46-4.95-12-5.91v.19l3.17,3.05c-.23.45-.46.89-.68,1.34l-5.21-1v.19l3.39,3.44-1.35,1.72v-.38C139,31,137.86,24.37,129.4,22.15c3.2,5.81,18.4,12.6,12.47,18.9L124.19,23.67l-8.61,8.4-.68-.38-6.35-7.44,8.16-6.69L112,15.08l-7.47,5-2.72-3.25,1.81-1.72c-2.77-2.37-6.39-3-8.61-5.92.48-.71,1.2-.93,1.81-1.52L87,2.67,83.17,4.39l.46.19C86.38,6.93,90,7.43,92,10.5l-.23.38-2,1,.46.57c3.42.95,7.69,3.4,8.84,6.3L76.15,7.06c-.94.35-1.62.51-2,1.34l9.06,4.77c10,5.39,20.81,8.58,26.52,17.57l-33.54-17v.57l14,18.14-15.64-8C68.62,18.71,67.79,8.18,56.88,6.68l8.84,13-7.93-3.81-2.72-4.2c-3.24-1.56-6.86-.65-9.74-2.1L39.89,6.49c-1-1.26-1-2.84-2.5-3.63L24.25,0l3.17,6.11c6,1,11.43,2.26,15.41,5l3,4.59,5.89.95c3.85.86,8.23,2.61,10.65,4.77L32,16v.19c.55,1.05,1.11,2.67,2.27,3.24l12,2.1,25.84,4.59,9.06,5,6.8,3.44v.19h-.22l-41-6.68.22.38,40.57,21h7.33L67.08,35.13v-.19h1.36L97.9,39.52l13.6,7.06c.84,1,1.67,1.92,2.51,2.87h10.53a.52.52,0,0,1,.11-.38,5.37,5.37,0,0,0,.48.38h19.39a6.62,6.62,0,0,1,1.66-2.29h1.13c3.93,1.45,11.93,1.18,16.89,2.29Zm-52.64-6.11c-.45.7-.9,1.4-1.36,2.1-5.39-.37-16.69-5.32-19.94-8l-6.12-8c-1.24-1.58-5.86-5.46-5.44-7.25l6.35,3.24C104,30.43,115.13,34.78,120.79,43.34Zm19.49.57c-.72,1.29-1.7,3.9-3.62,4.2-8.87-2.18-12.24-5.48-16.77-11.07l6.8-7.45Z"
                fill="#00aeef" fill-rule="evenodd" />
              <path
                d="M100.62,107.49l-.65-1.14h18.27l3.46,5.72c-10.94-.25-11.28.07-14.5,6.49l6.34,10.5v.57L93.37,131,84.08,113.6v-.19L96.77,113Z"
                fill="#00aeef" fill-rule="evenodd" />
              <path d="M147.41,106.35h12.75l-2.88,12.21v.38Z" fill="#00aeef" fill-rule="evenodd" />
              <path
                d="M175.59,106.35H182l25.6,13.17L225,128.68c.3,1.59.61,3.18.91,4.77-1.62.61-7.65-3.55-9.52-4.58l-26.29-13.55a35.61,35.61,0,0,0,17.68,13.55c1.06,2-.06,5,.9,7.45,1.89,4.77,13,12.2,18.81,13.93,1.9,3.13,2.49,9.77,2.5,13.75h-.23l-19.26-10.31q-.34-4.2-.68-8.4l-7.25-8.4c-3.28-2.26-9.16-3.37-11.56-6.3v-6.87l-7-7.83-.22-.38h-.23q-.91,11.64-1.81,23.29l-9.07-4.39c-1.14-2.15,1.51-19.7,2.27-23.29Z"
                fill="#00aeef" fill-rule="evenodd" />
              <path
                d="M227.08,109.59c-1.21-1-2.37-2.14-3.56-3.24h9.22a20.2,20.2,0,0,0,11.34,2.86l11.33,9.92c.08.19.15.39.23.58l-7.71.57C243.05,117.08,237,107.28,227.08,109.59Z"
                fill="#00aeef" fill-rule="evenodd" />
              <path d="M219.23,106.35l14.65,14.31,1.13,1-4.3.57-16.12-15.84Z" fill="#00aeef" fill-rule="evenodd" />
              <path
                d="M99.73,81.48H82.49V93.15h20.23v7.22H76.45a2.94,2.94,0,0,1-2.94-2.94V59.72a2.94,2.94,0,0,1,2.94-2.93h26.21v7.27H82.49V74.45H99.73Z"
                fill="#333" />
              <path
                d="M150.61,100.37h-6.05L127.08,71.69v28.68h-9V59.72A2.93,2.93,0,0,1,121,56.79h6l17.51,28.73V56.79h8.95V97.43A2.94,2.94,0,0,1,150.61,100.37Z"
                fill="#333" />
              <path
                d="M203.76,64.06H190.42v36.31h-9V64.06H168.27V59.72a2.93,2.93,0,0,1,2.93-2.93h29.63a2.93,2.93,0,0,1,2.93,2.93Z"
                fill="#333" />
              <path
                d="M235.58,84.41h-7.15v16h-9V59.72a2.93,2.93,0,0,1,2.93-2.93h13.26q7.73,0,11.91,3.44T251.74,70a13.35,13.35,0,0,1-1.93,7.43A13.09,13.09,0,0,1,244,82.14L253.39,100v.42h-9.64Zm-7.15-7.27h7.24a7.41,7.41,0,0,0,5.24-1.72,6.14,6.14,0,0,0,1.85-4.74A6.56,6.56,0,0,0,241,65.83q-1.74-1.77-5.37-1.77h-7.21Z"
                fill="#333" />
              <path d="M276.33,100.37h-6V59.72a2.93,2.93,0,0,1,2.93-2.93h6V97.43A2.94,2.94,0,0,1,276.33,100.37Z"
                fill="#333" />
              <path d="M350.39,100.37h-6.05V59.72a2.94,2.94,0,0,1,2.94-2.93h6V97.43A2.94,2.94,0,0,1,350.39,100.37Z"
                fill="#333" />
              <path
                d="M384.23,84.41h-7.15v16h-9V59.72A2.93,2.93,0,0,1,371,56.79h13.26q7.72,0,11.91,3.44T400.39,70a13.35,13.35,0,0,1-1.93,7.43,13.09,13.09,0,0,1-5.85,4.75L402,100v.42H392.4Zm-7.15-7.27h7.24a7.41,7.41,0,0,0,5.24-1.72,6.14,6.14,0,0,0,1.85-4.74,6.56,6.56,0,0,0-1.75-4.85q-1.74-1.77-5.37-1.77h-7.21Z"
                fill="#333" />
              <path
                d="M270.86,113.05a1,1,0,0,1-.24.28.56.56,0,0,1-.3.08.77.77,0,0,1-.45-.18c-.17-.12-.38-.25-.64-.41a4.75,4.75,0,0,0-.9-.4,4,4,0,0,0-1.27-.18,3.67,3.67,0,0,0-1.21.18,2.58,2.58,0,0,0-.88.49,2.15,2.15,0,0,0-.53.74,2.32,2.32,0,0,0-.18.92,1.7,1.7,0,0,0,.32,1.05,2.88,2.88,0,0,0,.85.72,7.35,7.35,0,0,0,1.2.52l1.38.45a13.5,13.5,0,0,1,1.37.55,4.65,4.65,0,0,1,1.2.77,3.42,3.42,0,0,1,.85,1.15,3.73,3.73,0,0,1,.33,1.65,5.29,5.29,0,0,1-.36,2,4.48,4.48,0,0,1-1,1.59,4.66,4.66,0,0,1-1.68,1.07,6.11,6.11,0,0,1-2.26.4,7.19,7.19,0,0,1-1.47-.15,7.09,7.09,0,0,1-1.35-.42,6.9,6.9,0,0,1-1.2-.65,5.83,5.83,0,0,1-1-.85l.67-1.12a.72.72,0,0,1,.24-.22.54.54,0,0,1,.31-.09.91.91,0,0,1,.53.24,8.42,8.42,0,0,0,.75.53,5.33,5.33,0,0,0,1.07.54,4.2,4.2,0,0,0,1.51.24,4.34,4.34,0,0,0,1.3-.19,2.81,2.81,0,0,0,1-.55,2.42,2.42,0,0,0,.6-.87,2.87,2.87,0,0,0,.21-1.12,1.89,1.89,0,0,0-.32-1.13,2.68,2.68,0,0,0-.85-.74,5.48,5.48,0,0,0-1.2-.5l-1.37-.44a13.47,13.47,0,0,1-1.38-.52,4.54,4.54,0,0,1-1.19-.78,3.31,3.31,0,0,1-.85-1.2,4.41,4.41,0,0,1-.32-1.77,4.21,4.21,0,0,1,.33-1.64,4.07,4.07,0,0,1,1-1.4,4.72,4.72,0,0,1,1.56-1,5.56,5.56,0,0,1,2.11-.37,6.93,6.93,0,0,1,2.45.42,5.81,5.81,0,0,1,1.94,1.22Z"
                fill="#333" />
              <path
                d="M291.56,118.37a8.94,8.94,0,0,1-.56,3.25,7.42,7.42,0,0,1-1.6,2.55,7.24,7.24,0,0,1-2.48,1.67,8.95,8.95,0,0,1-6.39,0,7.14,7.14,0,0,1-2.48-1.67,7.57,7.57,0,0,1-1.6-2.55,9.52,9.52,0,0,1,0-6.49,7.71,7.71,0,0,1,1.6-2.56,7.28,7.28,0,0,1,2.48-1.67,8.81,8.81,0,0,1,6.39,0,7.38,7.38,0,0,1,2.48,1.67,7.56,7.56,0,0,1,1.6,2.56A9,9,0,0,1,291.56,118.37Zm-2.39,0a7.68,7.68,0,0,0-.39-2.53,5.38,5.38,0,0,0-1.09-1.9,4.77,4.77,0,0,0-1.72-1.2,6.24,6.24,0,0,0-4.5,0,4.86,4.86,0,0,0-1.72,1.2,5.55,5.55,0,0,0-1.1,1.9,8.65,8.65,0,0,0,0,5.07,5.51,5.51,0,0,0,1.1,1.89,4.73,4.73,0,0,0,1.72,1.2,6.38,6.38,0,0,0,4.5,0,4.65,4.65,0,0,0,1.72-1.2,5.33,5.33,0,0,0,1.09-1.89A7.7,7.7,0,0,0,289.17,118.37Z"
                fill="#333" />
              <path d="M305.74,124.3v2h-9V110.48H299V124.3Z" fill="#333" />
              <path
                d="M315.85,124.39a4.31,4.31,0,0,0,1.69-.32,3.5,3.5,0,0,0,1.27-.9,4.1,4.1,0,0,0,.79-1.37,5.48,5.48,0,0,0,.27-1.77v-9.55h2.33V120a7.15,7.15,0,0,1-.44,2.57A5.69,5.69,0,0,1,318.5,126a7,7,0,0,1-2.65.49,6.92,6.92,0,0,1-2.65-.49,5.63,5.63,0,0,1-2-1.34,5.82,5.82,0,0,1-1.27-2,7.38,7.38,0,0,1-.44-2.57v-9.55h2.34V120a5.48,5.48,0,0,0,.27,1.77,3.75,3.75,0,0,0,.79,1.38,3.38,3.38,0,0,0,1.26.9A4.37,4.37,0,0,0,315.85,124.39Z"
                fill="#333" />
              <path d="M338.88,112.43h-5v13.84h-2.33V112.43h-5v-2h12.39Z" fill="#333" />
              <path d="M345.7,126.27h-2.35V110.48h2.35Z" fill="#333" />
              <path
                d="M366.51,118.37a9.16,9.16,0,0,1-.56,3.25,7.42,7.42,0,0,1-1.6,2.55,7.24,7.24,0,0,1-2.48,1.67,8.95,8.95,0,0,1-6.39,0,7.14,7.14,0,0,1-2.48-1.67,7.57,7.57,0,0,1-1.6-2.55,9.52,9.52,0,0,1,0-6.49,7.71,7.71,0,0,1,1.6-2.56,7.28,7.28,0,0,1,2.48-1.67,8.81,8.81,0,0,1,6.39,0,7.38,7.38,0,0,1,2.48,1.67,7.56,7.56,0,0,1,1.6,2.56A9.19,9.19,0,0,1,366.51,118.37Zm-2.4,0a7.69,7.69,0,0,0-.38-2.53,5.53,5.53,0,0,0-1.09-1.9,4.86,4.86,0,0,0-1.72-1.2,6.24,6.24,0,0,0-4.5,0,4.86,4.86,0,0,0-1.72,1.2,5.4,5.4,0,0,0-1.1,1.9,8.65,8.65,0,0,0,0,5.07,5.35,5.35,0,0,0,1.1,1.89,4.73,4.73,0,0,0,1.72,1.2,6.38,6.38,0,0,0,4.5,0,4.73,4.73,0,0,0,1.72-1.2,5.49,5.49,0,0,0,1.09-1.89A7.71,7.71,0,0,0,364.11,118.37Z"
                fill="#333" />
              <path
                d="M384.58,110.48v15.79h-1.19a.88.88,0,0,1-.45-.1,1.32,1.32,0,0,1-.37-.32l-8.92-11.54c0,.2,0,.4,0,.59s0,.37,0,.54v10.83h-2.05V110.48h1.21a1.11,1.11,0,0,1,.46.07,1,1,0,0,1,.34.32l8.94,11.55c0-.21,0-.42-.05-.62s0-.39,0-.57V110.48Z"
                fill="#333" />
              <path
                d="M398.86,113.05a1.15,1.15,0,0,1-.23.28.62.62,0,0,1-.31.08.79.79,0,0,1-.45-.18c-.17-.12-.38-.25-.64-.41a4.75,4.75,0,0,0-.9-.4,4,4,0,0,0-1.27-.18,3.67,3.67,0,0,0-1.21.18,2.58,2.58,0,0,0-.88.49,2.15,2.15,0,0,0-.53.74,2.32,2.32,0,0,0-.18.92,1.7,1.7,0,0,0,.32,1.05,2.88,2.88,0,0,0,.85.72,7.35,7.35,0,0,0,1.2.52l1.38.45a12.63,12.63,0,0,1,1.37.55,4.65,4.65,0,0,1,1.2.77,3.42,3.42,0,0,1,.85,1.15,3.73,3.73,0,0,1,.33,1.65,5.29,5.29,0,0,1-.36,2,4.48,4.48,0,0,1-1,1.59,4.66,4.66,0,0,1-1.68,1.07,6.11,6.11,0,0,1-2.26.4,7.19,7.19,0,0,1-1.47-.15,7.09,7.09,0,0,1-1.35-.42,6.9,6.9,0,0,1-1.2-.65,5.83,5.83,0,0,1-1-.85l.67-1.12a.72.72,0,0,1,.24-.22.54.54,0,0,1,.31-.09.91.91,0,0,1,.53.24,8.42,8.42,0,0,0,.75.53,5.33,5.33,0,0,0,1.07.54,4.2,4.2,0,0,0,1.51.24,4.34,4.34,0,0,0,1.3-.19,2.81,2.81,0,0,0,1-.55,2.42,2.42,0,0,0,.6-.87,2.87,2.87,0,0,0,.21-1.12,1.89,1.89,0,0,0-.32-1.13,2.68,2.68,0,0,0-.85-.74,5.48,5.48,0,0,0-1.2-.5l-1.37-.44a13.47,13.47,0,0,1-1.38-.52,4.54,4.54,0,0,1-1.19-.78,3.31,3.31,0,0,1-.85-1.2,4.41,4.41,0,0,1-.32-1.77,4.21,4.21,0,0,1,.33-1.64,4.07,4.07,0,0,1,1-1.4,4.72,4.72,0,0,1,1.56-1,5.56,5.56,0,0,1,2.11-.37,6.93,6.93,0,0,1,2.45.42,5.81,5.81,0,0,1,1.94,1.22Z"
                fill="#333" />
              <path
                d="M323.38,100.37h9.55l-15.6-41.68a2.94,2.94,0,0,0-2.75-1.9h-4.24a2.93,2.93,0,0,0-2.75,1.91l-15.51,41.67h9.54l1.85-5.55h0l7.07-21.24,1.92-5.78,3.79,11.29h0l1.69,5h0l4.35,13h0Z"
                fill="#333" />
              <polygon points="305.93 100.09 319.08 100.09 312.47 80.41 305.93 100.09" fill="#00aeef" />
            </svg>
          </div>
        </a>
      </div>
      <div class="right-container hidden md:block">
        <nav class="flex gap-x-8 text-black-title ">
          <div class="font-bold flex items-center gap-x-2">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>
            </div>
            <a href="{{ url('/') }}">Home</a>
          </div>
          <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
          <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
          <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
          <div class="font-light"><a href="{{ url('contact-us') }}">Contact Us</a></div>
        </nav>
      </div>
      <div onclick="expandMenu()" class="block md:hidden">
        <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="#007AB7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </div>
    </div>
    <div id="menu-bar"
      class="hidden w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex items-center justify-center gap-x-2 py-4 md:py-8">
      <nav class="flex flex-col gap-y-4 text-center justify-center">
        <div class="font-bold flex items-center gap-x-2">
          <div class="triangle w-3">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
              <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
            </svg>

          </div>
          <a href="{{ url('/') }}">Home</a>
        </div>
        <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
        <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
        <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
        <div class="font-light"><a href="{{ url('contact-us') }}">Contact Us</a></div>
      </nav>
    </div>
  </header>
  <section class="landing-section bg-landing-bg bg-cover">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex-col-reverse flex flex-col md:flex-row items-center justify-center py-8 md:py-0">
      <div class="left-container fade-in-element right pt-8 md:w-2/5 flex justify-center md:justify-normal">
        <div>
          <div class="header pb-4">
            <div class="relative pb-4 lg:pb-6">
              <h1>
                <span class="text-3xl lg:text-[43px] font-bold text-blue-primary uppercase">
                  RENT COOL, 
                </span><br/>
                <span class="text-5xl lg:text-[45px] font-light absolute left-[30px] md:left-[55px] top-[20px] lg:top-[30px] font-[mathilde]">
                  with peace of mind!
                </span>
              </h1>
            </div>
          </div>
          <div class="header-list">
            <div class="header-list-item flex gap-x-2 items-start">
              <div class="header-list-check w-6 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.729" height="22.729" viewBox="0 0 22.729 22.729">
                  <g id="Group_296" data-name="Group 296" transform="translate(-1368.5 -306.195)">
                    <path id="Path_822" data-name="Path 822"
                      d="M1374.511,317.558a.894.894,0,0,1,.667.311c.705.708,1.426,1.4,2.112,2.126.248.263.375.218.6-.014q3.287-3.312,6.593-6.606a.9.9,0,0,1,.825-.363.722.722,0,0,1,.592.523.745.745,0,0,1-.218.794q-1.152,1.155-2.306,2.308-2.548,2.549-5.1,5.1c-.514.513-.879.516-1.386.009q-1.423-1.421-2.843-2.844a.75.75,0,0,1-.194-.9A.719.719,0,0,1,1374.511,317.558Z"
                      fill="#007ab7" />
                    <circle id="Ellipse_43" data-name="Ellipse 43" cx="10.365" cy="10.365" r="10.365"
                      transform="translate(1369.5 307.195)" fill="none" stroke="#007ab7" stroke-miterlimit="10"
                      stroke-width="2" />
                  </g>
                </svg>
              </div>
              <div class="text-black-title header-list-name font-bold text-xl">
                <h3>Hassle-free air conditioner rental service</h3>
              </div>
            </div>
            <div class="header-list-item flex gap-x-2 items-start">
              <div class="header-list-check w-6 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.729" height="22.729" viewBox="0 0 22.729 22.729">
                  <g id="Group_296" data-name="Group 296" transform="translate(-1368.5 -306.195)">
                    <path id="Path_822" data-name="Path 822"
                      d="M1374.511,317.558a.894.894,0,0,1,.667.311c.705.708,1.426,1.4,2.112,2.126.248.263.375.218.6-.014q3.287-3.312,6.593-6.606a.9.9,0,0,1,.825-.363.722.722,0,0,1,.592.523.745.745,0,0,1-.218.794q-1.152,1.155-2.306,2.308-2.548,2.549-5.1,5.1c-.514.513-.879.516-1.386.009q-1.423-1.421-2.843-2.844a.75.75,0,0,1-.194-.9A.719.719,0,0,1,1374.511,317.558Z"
                      fill="#007ab7" />
                    <circle id="Ellipse_43" data-name="Ellipse 43" cx="10.365" cy="10.365" r="10.365"
                      transform="translate(1369.5 307.195)" fill="none" stroke="#007ab7" stroke-miterlimit="10"
                      stroke-width="2" />
                  </g>
                </svg>
              </div>
              <div class="text-black-title header-list-name font-bold text-xl">
                <h2>Wide selection of preferred brands</h2>
              </div>
            </div>
            <div class="header-list-item flex gap-x-2 items-start">
              <div class="header-list-check w-6 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.729" height="22.729" viewBox="0 0 22.729 22.729">
                  <g id="Group_296" data-name="Group 296" transform="translate(-1368.5 -306.195)">
                    <path id="Path_822" data-name="Path 822"
                      d="M1374.511,317.558a.894.894,0,0,1,.667.311c.705.708,1.426,1.4,2.112,2.126.248.263.375.218.6-.014q3.287-3.312,6.593-6.606a.9.9,0,0,1,.825-.363.722.722,0,0,1,.592.523.745.745,0,0,1-.218.794q-1.152,1.155-2.306,2.308-2.548,2.549-5.1,5.1c-.514.513-.879.516-1.386.009q-1.423-1.421-2.843-2.844a.75.75,0,0,1-.194-.9A.719.719,0,0,1,1374.511,317.558Z"
                      fill="#007ab7" />
                    <circle id="Ellipse_43" data-name="Ellipse 43" cx="10.365" cy="10.365" r="10.365"
                      transform="translate(1369.5 307.195)" fill="none" stroke="#007ab7" stroke-miterlimit="10"
                      stroke-width="2" />
                  </g>
                </svg>
              </div>
              <div class="text-black-title header-list-name font-bold text-xl">
                <h2>Comprehensive 5-year warranty that covers everything</h2>
              </div>
            </div>
          </div>
          <div class="h-0.5 bg-blue-primary w-1/3 md:w-20 my-4"></div>
          <div class="header-tag-line text-[14px] leading-[170%] font-light pb-4">
            <h3>Experience the ultimate comfort and convenience with CentriAir. Rent cool today and stay worry-free!</h3>
          </div>
          <div class="header-button-container flex gap-x-2 md:gap-x-6">
            <a href="{{ url('our-plans') }}"
              class="button-primary bg-blue-primary text-white px-4 sm:px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
              <p>Our Plans</p>
            </a>
            <a href="{{ url('our-services') }}"
              class="button-secondary bg-white text-blue-primary px-4 sm:px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
              <p>Our Services</p>
            </a>
          </div>
        </div>
      </div>
      <div class="right-container fade-in-element left flex-col md:w-3/5 px-6 md:px-0">
        <div class="flex justify-center border-b-2 md:border-b-0 border-divider-grey px-6 md:px-0">
          <img src="{{ url('theme/assets/photos/landing-man.png') }}">
        </div>
      </div>
    </div>
  </section>
  <section class="about-us-section relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base md:flex items-center justify-center gap-x-4 py-8 md:py-24 z-50 relative">
      <div class="left-container fade-in-element down md:flex-col md:w-2/5 flex justify-center pb-4 md:pb-0">
        <div>
          <img src="{{ url('theme/assets/photos/about-us.jpg') }}">
        </div>
      </div>
      <div class="right-container fade-in-element up md:flex-col md:w-3/5 flex justify-center">
        <div class="about-us-container">
          <div class="text-black-title about-us-heading uppercase font-bold text-md md:text-lg md:text-xl flex gap-x-2">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>
            </div>
            <h2>About Us</h2>
          </div>
          <div class="about-us-headline text-light-grey font-light text-xl md:text-[27px] mt-2">
            <h2>Welcome to the solution for all your</h2>
          </div>
          <!-- <div class="about-us-headline text-md md:text-md md:text-lg">
            <h2>We also provide the best</h2>
          </div> -->
          <div class="about-us-headline text-blue-primary font-bold text-3xl">
            <h2>cooling needs!</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4"></div>
          <div class="reset about-us-tag-line font-light pb-4 text-[14px] leading-[170%]">
            <p>Say goodbye to buying and maintaining air conditioners with short warranties.</p>
            <p>At CentriAir, you can now experience a worry-free rental option for a cool and
              comfortable environment, up to 5 years warranty.</p>
            <p>Stay cool without the commitment – RENT an air conditioner today!</p>
          </div>
          <div class="inline-flex">
            <a href="{{ url('about-us') }}"
              class=" bg-blue-primary h-full w-full text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
              <p>Read More</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block absolute bottom-0 right-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
          </linearGradient>
        </defs>
        <path id="Path_723" data-name="Path 723" d="M2376.5,1144.514V945.486l-298,100.056Z"
          transform="translate(-2078.5 -945.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <div class="divider h-0.5 bg-divider-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto"></div>
  <section class="steps-section">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col items-center justify-center py-8 md:py-24">
      <div class="steps-header fade-in-element left flex justify-center w-full text-center">
        <div class="text-black-title  steps-header-container">
          <div class="steps-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>
            </div>
            <h2>How does it work?</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="steps-tag-line text-md md:text-lg font-light pb-4">
            <p>It is incredibly convenient to rent an air conditioner</p>
          </div>
        </div>
      </div>
      <div class="steps-body fade-in-element right grid grid-cols-2 md:grid-cols-3 gap-x-8 sm:gap-x-20 md:gap-x-48 gap-y-8 md:gap-y-16 py-4">
        <div class="grid-item text-center flex flex-col">
          <div class="grid-item-image w-28 mx-auto pb-2">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 102.609">
              <g id="Group_297" data-name="Group 297" transform="translate(-1440.5 -1365.059)">
                <g id="Group_202" data-name="Group 202">
                  <g id="Group_200" data-name="Group 200">
                    <circle id="Ellipse_25" data-name="Ellipse 25" cx="48.857" cy="48.857" r="48.857"
                      transform="translate(1444.339 1367.506)" fill="#fff" />
                    <path id="Path_731" data-name="Path 731"
                      d="M1493.315,1365.059h-.094a51.3,51.3,0,0,0-.142,102.609h.094a51.3,51.3,0,0,0,.142-102.609Zm33.2,84.83a46.9,46.9,0,0,1-33.277,13.772h-.171a47.3,47.3,0,0,1,.1-94.6h.169a47.263,47.263,0,0,1,33.18,80.824Z"
                      fill="#007ab7" />
                    <path id="Path_732" data-name="Path 732"
                      d="M1511.632,1415.973c0-2.85.063-5.7-.012-8.549a18.463,18.463,0,0,0-36.661-2.146,21.418,21.418,0,0,0-.225,3.607c-.016,5.421-.006,10.841-.007,16.262,0,1.541-.182,1.786-1.683,1.921-.734.067-.455.557-.424.872a11.977,11.977,0,0,0,3.336,7.367c2.822,2.919,6.342,3.907,10.293,3.722.388-.018.426-.241.527-.5a4.883,4.883,0,0,1,4.969-3.414,18.007,18.007,0,0,1,4.436.18,4.909,4.909,0,0,1-1.209,9.666,18.232,18.232,0,0,1-4.894-.2,4.48,4.48,0,0,1-3.2-2.964.916.916,0,0,0-1.116-.738,14.034,14.034,0,0,1-9.657-2.83,13.873,13.873,0,0,1-5.583-10.45c-.041-.571-.2-.687-.739-.741a6.581,6.581,0,0,1-6.232-6.329,37.378,37.378,0,0,1,.047-6.5,6.639,6.639,0,0,1,6.295-5.855c.862-.032,2.012.283,2.505-.154.474-.42.261-1.608.362-2.457a20.594,20.594,0,0,1,40.651-1.39,17.651,17.651,0,0,1,.347,3.226c.012.694.249.8.856.779a10.5,10.5,0,0,1,3.325.212,6.6,6.6,0,0,1,4.857,5.808,35.538,35.538,0,0,1,0,6.588,6.619,6.619,0,0,1-6.557,6.1c-.99.038-1.982.02-2.973.011-1.219-.01-1.606-.394-1.61-1.629-.009-3.159,0-6.319,0-9.478Zm2.166,1.666c0,2.227.009,4.455-.007,6.682,0,.442.061.69.593.65.739-.055,1.486,0,2.224-.065a4.394,4.394,0,0,0,4.09-3.971,38.182,38.182,0,0,0,0-6.487,4.454,4.454,0,0,0-3.561-3.893,17.793,17.793,0,0,0-2.582-.167c-.6-.047-.782.137-.771.754C1513.822,1413.307,1513.8,1415.473,1513.8,1417.639Zm-41.208.1v-5.011c0-2.657,0-2.657-2.7-2.3a4.623,4.623,0,0,0-4.266,4.571c-.064,1.265.056,2.541-.035,3.8-.3,4.131,1.673,6.516,6.316,6.185.6-.043.7-.216.693-.751C1472.574,1422.068,1472.59,1419.9,1472.59,1417.737Zm20.57,25.15c.588,0,1.177.017,1.765,0a2.833,2.833,0,0,0,.114-5.664c-1.236-.054-2.479-.057-3.715,0a2.831,2.831,0,0,0,.071,5.659C1491.982,1442.908,1492.572,1442.885,1493.16,1442.887Z"
                      fill="#007ab7" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                  </g>
                  <g id="Group_201" data-name="Group 201">
                    <circle id="Ellipse_26" data-name="Ellipse 26" cx="14.657" cy="14.657" r="14.657"
                      transform="translate(1440.5 1368.55)" fill="#00aeef" />
                    <text id="_1" data-name="1" transform="translate(1448.835 1389.081)" fill="#fff" font-size="20.101"
                      font-family="Roboto-Black, Roboto" font-weight="800" letter-spacing="0.05em">
                      <tspan x="0" y="0">1</tspan>
                    </text>
                  </g>
                </g>
              </g>
            </svg>

          </div>
          <div class="grid-title">
            <h3>Contact us</h3>
          </div>
        </div>
        <div class="grid-item text-center">
          <div class="grid-item-image w-28 mx-auto pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 104 102.714">
              <g id="Group_205" data-name="Group 205" transform="translate(-1752.5 -1365.179)">
                <g id="Group_203" data-name="Group 203">
                  <circle id="Ellipse_27" data-name="Ellipse 27" cx="49.485" cy="49.485" r="49.485"
                    transform="translate(1755.658 1367.051)" fill="#fff" />
                  <path id="Path_733" data-name="Path 733"
                    d="M1805.126,1365.179h-.077a51.357,51.357,0,0,0,.1,102.714h.014a51.357,51.357,0,1,0-.033-102.714Zm.031,98.7h-.063a47.347,47.347,0,0,1,.035-94.694h.065a47.347,47.347,0,0,1-.037,94.694Z"
                    fill="#007ab7" />
                  <path id="Path_734" data-name="Path 734"
                    d="M1781.96,1420.49a3.886,3.886,0,0,1,2.89,1.346c3.05,3.068,6.172,6.067,9.143,9.21,1.075,1.136,1.623.943,2.621-.063q14.234-14.346,28.55-28.608c1.007-1.01,2.047-1.864,3.575-1.572a3.136,3.136,0,0,1,2.563,2.264,3.236,3.236,0,0,1-.944,3.441q-4.988,5-9.987,9.995-11.035,11.037-22.073,22.072c-2.223,2.222-3.8,2.233-6,.039q-6.162-6.153-12.313-12.316a3.248,3.248,0,0,1-.841-3.885A3.123,3.123,0,0,1,1781.96,1420.49Z"
                    fill="#007ab7" />
                </g>
                <g id="Group_204" data-name="Group 204">
                  <circle id="Ellipse_28" data-name="Ellipse 28" cx="14.672" cy="14.672" r="14.672"
                    transform="translate(1752.5 1368.525)" fill="#00aeef" />
                  <text id="_2" data-name="2" transform="translate(1760.843 1389.077)" fill="#fff" font-size="20.122"
                    font-family="Roboto-Black, Roboto" font-weight="800" letter-spacing="0.05em">
                    <tspan x="0" y="0">2</tspan>
                  </text>
                </g>
              </g>
            </svg>

          </div>
          <div class="grid-title">
            <h3>Choose a plan and pay a upfront payment</h3>
          </div>
        </div>
        <div class="grid-item text-center">
          <div class="grid-item-image w-28 mx-auto pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 104 102.72">
              <g id="Group_298" data-name="Group 298" transform="translate(-2064.5 -1365.555)">
                <g id="Group_208" data-name="Group 208">
                  <circle id="Ellipse_29" data-name="Ellipse 29" cx="48.033" cy="48.033" r="48.033"
                    transform="translate(2068.778 1368.882)" fill="#fff" />
                  <path id="Path_735" data-name="Path 735"
                    d="M2117.259,1365.555h-.094a51.36,51.36,0,0,0-.141,102.72h.095a51.36,51.36,0,0,0,.14-102.72Zm33.222,84.913a46.942,46.942,0,0,1-33.3,13.783h-.171a47.336,47.336,0,0,1,.1-94.672h.169a47.3,47.3,0,0,1,33.207,80.889Z"
                    fill="#007ab7" />
                  <g id="Group_206" data-name="Group 206">
                    <path id="Path_736" data-name="Path 736"
                      d="M2120.849,1441.061l.126.18c.016.028.036.066.06.118a15.2,15.2,0,0,0,13.85,8.948,16.4,16.4,0,0,0,3.588-.4,15.228,15.228,0,0,0,.064-29.6l-.321-.084,0-.331q.016-4.243.009-8.491l-.012-3.666.008-2.411c.01-2.537.02-5.162-.023-7.771a7.11,7.11,0,0,0-6.06-6.9,14.684,14.684,0,0,0-2.685-.138c-.477.007-.954.01-1.432-.013a6.693,6.693,0,0,0-.906.049c-.179.019-.44.038-.626.045l-.453.015.012-.453c0-.163.03-.388.05-.553a5.86,5.86,0,0,0,.054-.856,1.919,1.919,0,0,0-1.857-2.053,1.81,1.81,0,0,0-1.37.43,2.241,2.241,0,0,0-.7,1.6,11.667,11.667,0,0,0-.02,1.339l.024.452-.453,0c-4.867-.026-10.069-.027-15.9,0l-.452,0,.025-.452a10.246,10.246,0,0,0-.051-1.649,1.808,1.808,0,0,0-1.9-1.72,1.843,1.843,0,0,0-1.941,1.82,15.019,15.019,0,0,0-.027,1.548l.016.449-.449-.006c-.512-.008-1.025,0-1.543,0h-.112c-.7.006-1.407.012-2.111-.009a7.5,7.5,0,0,0-5.624,2.09,7.878,7.878,0,0,0-2.275,5.694c.071,7.95.059,16.037.049,23.859v.132q-.009,5.525-.009,11.052c0,4.68,3.056,7.705,7.777,7.706h.966q11.094,0,22.186-.009a.7.7,0,0,1,.1-.007.815.815,0,0,1,.148.015Zm22.135-13.92a11.169,11.169,0,0,1,3.271,7.986,11.408,11.408,0,0,1-11.365,11.316,11.17,11.17,0,0,1-7.987-3.345,11.327,11.327,0,1,1,16.081-15.957Zm-49.637-27.17c.028-.409.027-.808.026-1.195a12.688,12.688,0,0,1,.047-1.434,3.287,3.287,0,0,1,3.182-2.92c.514-.012,1.028-.016,1.543-.016l1.129.005c.611,0,1.223.005,1.837,0l.446-.006-.014.447c-.019.542,0,1.071.021,1.519a1.838,1.838,0,0,0,1.936,1.89,1.864,1.864,0,0,0,1.929-1.749,5.5,5.5,0,0,0,.028-.779l0-.23c0-.289,0-.5.007-.669l.014-.4.4-.015c.2-.008.468-.008.714-.008l3.849,0c3.73.005,7.583.007,11.376-.024l.47-.005-.041.469a7.075,7.075,0,0,0,.045,1.7,1.943,1.943,0,0,0,3.87-.228c0-.071,0-.144,0-.218v-.106c.01-.517.019-.931.05-1.193l.04-.34.34-.034c.259-.028.658-.028,1.153-.027l1.11,0c.7,0,1.4-.006,2.1.006a3.318,3.318,0,0,1,3.368,3.158c.03.422.027.853.024,1.311,0,.383-.007.736.006,1.093l.015.446-.446,0c-2.117-.019-4.236-.017-6.353-.013l-2.357,0h-16.434q-7.5-.006-15,.019l-.459,0Zm26.436,36.686.052.474h-.477c-7.562-.015-15.124,0-22.685-.021a3.274,3.274,0,0,1-3.282-3.031,9.14,9.14,0,0,1-.038-.97v-6.941c0-7.032,0-14.306-.027-21.459l0-.418.55-.069c5.1.028,10.189.024,15.288.021h9.282q7.74,0,15.478-.019h.432l0,.431c-.039,4.725-.04,9.57,0,14.81l0,.4-.394.032a15.436,15.436,0,0,0-10.939,5.7A15.181,15.181,0,0,0,2119.783,1436.657Z"
                      fill="#007ab7" />
                    <path id="Path_737" data-name="Path 737"
                      d="M2125.2,1416.312c-.031-1.076-.791-2.332-2.83-2.334q-9.825-.008-19.653,0a2.964,2.964,0,0,0-2.207.763,2.267,2.267,0,0,0-.617,1.7c.019.865.408,2.314,2.791,2.317s4.74,0,7.11,0h8.052l4.493,0a2.994,2.994,0,0,0,2.248-.8A2.2,2.2,0,0,0,2125.2,1416.312Z"
                      fill="#007ab7" />
                    <path id="Path_738" data-name="Path 738"
                      d="M2114.263,1422.651c-1.373-.01-2.746-.008-4.119-.006l-1.71,0-1.6,0q-2.116-.006-4.229.005a2.813,2.813,0,0,0-2.119.739,2.251,2.251,0,0,0-.594,1.7c.016.536.258,2.284,2.7,2.29q2.8.006,5.6.006,3.022,0,6.047-.007a2.413,2.413,0,0,0,2.7-2.351C2116.951,1423.6,2115.9,1422.664,2114.263,1422.651Z"
                      fill="#007ab7" />
                    <path id="Path_739" data-name="Path 739"
                      d="M2131.373,1441.256a2.375,2.375,0,0,0,3.559.051q2.394-2.284,4.784-4.573l3.768-3.6a2.629,2.629,0,0,0,.882-1.853l0-.051,0-.052a2.3,2.3,0,0,0-1.451-2.074,2.487,2.487,0,0,0-2.8.679q-1.328,1.273-2.661,2.541-2.133,2.031-4.253,4.075c-.966-1.01-2.035-2.081-3.259-3.267a2.577,2.577,0,0,0-1.954-.832,2.173,2.173,0,0,0-1.574.835,2.35,2.35,0,0,0,.188,3.349q2.2,2.214,4.414,4.416Z"
                      fill="#007ab7" />
                  </g>
                  <g id="Group_207" data-name="Group 207">
                    <circle id="Ellipse_30" data-name="Ellipse 30" cx="14.59" cy="14.59" r="14.59"
                      transform="translate(2064.5 1368.882)" fill="#00aeef" />
                    <text id="_3" data-name="3" transform="translate(2072.796 1389.319)" fill="#fff" font-size="20.009"
                      font-family="Roboto-Black, Roboto" font-weight="800" letter-spacing="0.05em">
                      <tspan x="0" y="0">3</tspan>
                    </text>
                  </g>
                </g>
              </g>
            </svg>

          </div>
          <div class="grid-title">
            <h3>Schedule an appointment with us</h3>
          </div>
        </div>
        <div class="grid-item text-center">
          <div class="grid-item-image w-28 mx-auto pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 104 103.384">
              <g id="Group_212" data-name="Group 212" transform="translate(-1440.5 -1576.382)">
                <g id="Group_210" data-name="Group 210">
                  <circle id="Ellipse_31" data-name="Ellipse 31" cx="48.335" cy="48.335" r="48.335"
                    transform="translate(1444.142 1579.74)" fill="#fff" />
                  <path id="Path_740" data-name="Path 740"
                    d="M1492.927,1576.382h-.093a51.692,51.692,0,0,0-.144,103.384h.1a51.692,51.692,0,0,0,.142-103.384Zm33.425,85.449a47.227,47.227,0,0,1-33.507,13.868h-.171a47.625,47.625,0,0,1,.1-95.25h.169a47.59,47.59,0,0,1,33.409,81.382Z"
                    fill="#007ab7" />
                  <g id="Group_209" data-name="Group 209">
                    <path id="Path_741" data-name="Path 741"
                      d="M1486.842,1605.982q8.619,0,17.238,0c1.977,0,2.766.788,2.776,2.757.009,1.515.009,1.515,1.476,1.515,2.341,0,4.683.039,7.023-.014a2.8,2.8,0,0,1,2.839,1.773c1.8,3.681,3.679,7.323,5.5,10.995a34.957,34.957,0,0,0,4.03,5.583,4.735,4.735,0,0,1,1.088,3.112c-.052,4.15-.017,8.3-.021,12.45,0,1.947-.743,2.675-2.71,2.679-1.6,0-3.193.027-4.788-.013a1,1,0,0,0-1.156.764,8.522,8.522,0,0,1-16.037-.024,1.018,1.018,0,0,0-1.163-.74c-3.654.027-7.307.035-10.96-.006a1.073,1.073,0,0,0-1.193.851,8.545,8.545,0,0,1-16.063-.174.854.854,0,0,0-.984-.669c-1.56.033-3.121.025-4.681.006a2.136,2.136,0,1,1,0-4.265c1.525-.017,3.051-.03,4.575.008a.9.9,0,0,0,1.062-.709,8.539,8.539,0,0,1,16.131-.187c.251.674.505.914,1.244.9,3.618-.046,7.236-.036,10.854-.006a1.008,1.008,0,0,0,1.14-.773,8.529,8.529,0,0,1,16.155.042c.214.575.47.784,1.062.724,1.046-.106,2.446.45,3.047-.226.519-.584.173-1.953.178-2.974.011-2.341-.015-4.683.016-7.023a2.208,2.208,0,0,0-.538-1.544c-.724-.871-1.432-1.761-2.083-2.687a1.5,1.5,0,0,0-1.418-.668c-5.072.026-10.144.017-15.216.013-1.985,0-2.705-.706-2.709-2.678-.009-4.363.005-8.726-.007-13.088-.005-1.674.243-1.428-1.483-1.43q-15.909-.012-31.817-.006c-1.533,0-2.407-.742-2.443-2.037a2.1,2.1,0,0,1,2.373-2.232Q1478.01,1605.974,1486.842,1605.982Zm25.985,17.185c1.771,0,3.543-.025,5.313.012.708.015.773-.178.471-.767q-1.857-3.625-3.659-7.28a.913.913,0,0,0-.958-.6q-3.187.047-6.375,0c-.6-.01-.784.161-.776.769q.049,3.559,0,7.119c-.009.611.183.777.777.765C1509.355,1623.143,1511.091,1623.167,1512.827,1623.167Zm-.758,17.194a4.264,4.264,0,0,0-4.23,4.263,4.347,4.347,0,0,0,4.333,4.3,4.415,4.415,0,0,0,4.26-4.3A4.328,4.328,0,0,0,1512.069,1640.361Zm-33.526,4.245a4.27,4.27,0,0,0,4.28,4.322,4.377,4.377,0,0,0,4.25-4.282,4.275,4.275,0,0,0-4.317-4.28A4.172,4.172,0,0,0,1478.543,1644.606Z"
                      fill="#007ab7" />
                    <path id="Path_742" data-name="Path 742"
                      d="M1475.48,1614.787c2.945,0,5.889.005,8.833,0a2.2,2.2,0,0,1,2.347,1.44,2.167,2.167,0,0,1-2.172,2.881c-1.168.049-2.34.011-3.511.011-4.753,0-9.506.012-14.259-.006-1.835-.007-2.907-1.32-2.408-2.873.311-.965,1.08-1.44,2.445-1.446C1469.663,1614.778,1472.572,1614.787,1475.48,1614.787Z"
                      fill="#007ab7" />
                    <path id="Path_743" data-name="Path 743"
                      d="M1471.946,1627.51c-2.907,0-5.814.008-8.72,0-1.576-.005-2.519-.792-2.549-2.087-.03-1.317.973-2.2,2.558-2.2q8.773-.011,17.547,0a2.2,2.2,0,0,1,2.444,1.732,2.1,2.1,0,0,1-2.24,2.546C1477.973,1627.529,1474.96,1627.509,1471.946,1627.51Z"
                      fill="#007ab7" />
                    <path id="Path_744" data-name="Path 744"
                      d="M1471.316,1631.683c1.561,0,3.121-.018,4.681.005a2.113,2.113,0,0,1,2.33,2.077,2.137,2.137,0,0,1-2.329,2.2q-4.734.035-9.469,0a2.149,2.149,0,1,1,0-4.278C1468.124,1631.666,1469.72,1631.683,1471.316,1631.683Z"
                      fill="#007ab7" />
                  </g>
                </g>
                <g id="Group_211" data-name="Group 211">
                  <circle id="Ellipse_32" data-name="Ellipse 32" cx="14.578" cy="14.578" r="14.578"
                    transform="translate(1440.5 1578.996)" fill="#00aeef" />
                  <text id="_4" data-name="4" transform="translate(1448.79 1599.418)" fill="#fff" font-size="19.993"
                    font-family="Roboto-Black, Roboto" font-weight="800" letter-spacing="0.05em">
                    <tspan x="0" y="0">4</tspan>
                  </text>
                </g>
              </g>
            </svg>

          </div>
          <div class="grid-title">
            <h3>Here we come!</h3>
          </div>
        </div>
        <div class="grid-item text-center">
          <div class="grid-item-image w-28 mx-auto pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 104 103.009">
              <g id="Group_218" data-name="Group 218" transform="translate(-1752.5 -1573.77)">
                <g id="Group_216" data-name="Group 216">
                  <g id="Group_213" data-name="Group 213">
                    <circle id="Ellipse_33" data-name="Ellipse 33" cx="48.167" cy="48.167" r="48.167"
                      transform="translate(1756.499 1577.107)" fill="#fff" />
                    <path id="Path_745" data-name="Path 745"
                      d="M1805.115,1573.77h-.094a51.5,51.5,0,0,0-.142,103.009h.095a51.5,51.5,0,0,0,.141-103.009Zm33.315,85.151a47.073,47.073,0,0,1-33.4,13.822h-.172a47.469,47.469,0,0,1,.1-94.938h.169a47.434,47.434,0,0,1,33.3,81.116Z"
                      fill="#007ab7" />
                  </g>
                  <path id="Path_746" data-name="Path 746"
                    d="M1821.83,1601.184h-5.285v-2.1a2.1,2.1,0,0,0-4.2,0v2.1h-15.4v-2.1a2.1,2.1,0,0,0-4.2,0v2.1h-4.585a8.724,8.724,0,0,0-8.714,8.714v33.669a8.724,8.724,0,0,0,8.714,8.714h33.668a8.724,8.724,0,0,0,8.714-8.714V1609.9A8.724,8.724,0,0,0,1821.83,1601.184Zm-33.668,4.2h4.585v1.4a2.1,2.1,0,1,0,4.2,0v-1.4h15.4v1.4a2.1,2.1,0,0,0,4.2,0v-1.4h5.285a4.519,4.519,0,0,1,4.514,4.514v.386h-42.7v-.386A4.52,4.52,0,0,1,1788.162,1605.384Zm33.668,42.7h-33.668a4.52,4.52,0,0,1-4.515-4.514v-29.084h42.7v29.084A4.519,4.519,0,0,1,1821.83,1648.081Z"
                    fill="#007ab7" />
                  <g id="Group_214" data-name="Group 214">
                    <path id="Path_747" data-name="Path 747"
                      d="M1808.729,1629.047h2.03v2.866h-2.03v3.876h-3.556v-3.876h-7.345l-.16-2.239,7.468-11.8h3.593Zm-7.518,0h3.962v-6.325l-.234.406Z"
                      fill="#007ab7" />
                  </g>
                  <g id="Group_215" data-name="Group 215">
                    <path id="Path_748" data-name="Path 748"
                      d="M1790.775,1639.431l1.2,3.727,1.192-3.727h1.7v5.356h-1.3v-1.25l.125-2.561-1.3,3.811h-.854l-1.3-3.814.125,2.564v1.25h-1.292v-5.356Z"
                      fill="#007ab7" />
                    <path id="Path_749" data-name="Path 749"
                      d="M1800.595,1642.219a3.175,3.175,0,0,1-.29,1.388,2.148,2.148,0,0,1-.826.928,2.294,2.294,0,0,1-1.22.326,2.341,2.341,0,0,1-1.214-.314,2.144,2.144,0,0,1-.825-.9,3.046,3.046,0,0,1-.311-1.343v-.3a3.18,3.18,0,0,1,.288-1.389,2.146,2.146,0,0,1,.828-.929,2.448,2.448,0,0,1,2.441,0,2.182,2.182,0,0,1,.83.922,3.077,3.077,0,0,1,.3,1.37Zm-1.313-.224a2.251,2.251,0,0,0-.267-1.212.854.854,0,0,0-.763-.414q-.97,0-1.026,1.457l0,.393a2.32,2.32,0,0,0,.261,1.211.909.909,0,0,0,1.531.008,2.259,2.259,0,0,0,.268-1.2Z"
                      fill="#007ab7" />
                    <path id="Path_750" data-name="Path 750"
                      d="M1806.112,1644.787h-1.284l-1.9-3.332v3.332h-1.291v-5.356h1.291l1.9,3.333v-3.333h1.288Z"
                      fill="#007ab7" />
                    <path id="Path_751" data-name="Path 751"
                      d="M1811.4,1640.428H1809.8v4.359H1808.5v-4.359h-1.579v-1h4.478Z" fill="#007ab7" />
                    <path id="Path_752" data-name="Path 752"
                      d="M1816.8,1644.787h-1.284v-2.236h-1.9v2.236h-1.291v-5.356h1.291v2.127h1.9v-2.127h1.284Z"
                      fill="#007ab7" />
                    <path id="Path_753" data-name="Path 753"
                      d="M1820.758,1643.364a.532.532,0,0,0-.2-.442,2.487,2.487,0,0,0-.7-.327,6.63,6.63,0,0,1-.824-.328,1.56,1.56,0,0,1-1.042-1.4,1.259,1.259,0,0,1,.26-.785,1.672,1.672,0,0,1,.734-.53,2.842,2.842,0,0,1,1.067-.19,2.5,2.5,0,0,1,1.035.206,1.641,1.641,0,0,1,.712.588,1.523,1.523,0,0,1,.254.87h-1.288a.653.653,0,0,0-.2-.509.788.788,0,0,0-.543-.179.877.877,0,0,0-.546.152.45.45,0,0,0,.02.761,2.772,2.772,0,0,0,.776.346,4.841,4.841,0,0,1,.913.384,1.537,1.537,0,0,1,.868,1.38,1.308,1.308,0,0,1-.53,1.1,2.356,2.356,0,0,1-1.453.4,2.879,2.879,0,0,1-1.179-.234,1.774,1.774,0,0,1-.795-.64,1.662,1.662,0,0,1-.266-.936h1.294a.823.823,0,0,0,.223.635,1.053,1.053,0,0,0,.723.2.832.832,0,0,0,.506-.138A.454.454,0,0,0,1820.758,1643.364Z"
                      fill="#007ab7" />
                  </g>
                </g>
                <g id="Group_217" data-name="Group 217">
                  <circle id="Ellipse_34" data-name="Ellipse 34" cx="14.631" cy="14.631" r="14.631"
                    transform="translate(1752.5 1578.176)" fill="#00aeef" />
                  <text id="_5" data-name="5" transform="translate(1760.819 1598.67)" fill="#fff" font-size="20.065"
                    font-family="Roboto-Black, Roboto" font-weight="800" letter-spacing="0.05em">
                    <tspan x="0" y="0">5</tspan>
                  </text>
                </g>
              </g>
            </svg>

          </div>
          <div class="grid-title">
            <h3>General maintenance every 4 months</h3>
          </div>
        </div>
        <div class="grid-item text-center">
          <div class="grid-item-image w-28 mx-auto pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 104 102.722">
              <g id="Group_224" data-name="Group 224" transform="translate(-2064.5 -1573.913)">
                <g id="Group_222" data-name="Group 222">
                  <g id="Group_219" data-name="Group 219">
                    <circle id="Ellipse_35" data-name="Ellipse 35" cx="48.033" cy="48.033" r="48.033"
                      transform="translate(2068.778 1577.242)" fill="#fff" />
                    <path id="Path_754" data-name="Path 754"
                      d="M2117.259,1573.913h-.094a51.361,51.361,0,0,0-.141,102.722h.095a51.361,51.361,0,0,0,.14-102.722Zm33.222,84.914a46.942,46.942,0,0,1-33.3,13.783h-.171a47.336,47.336,0,0,1,.1-94.672h.168a47.3,47.3,0,0,1,33.207,80.889Z"
                      fill="#007ab7" />
                  </g>
                  <path id="Path_755" data-name="Path 755"
                    d="M2133.927,1601.252h-5.27v-2.094a2.094,2.094,0,0,0-4.188,0v2.094h-15.356v-2.094a2.094,2.094,0,0,0-4.188,0v2.094h-4.572a8.7,8.7,0,0,0-8.69,8.689v33.575a8.7,8.7,0,0,0,8.69,8.689h33.574a8.7,8.7,0,0,0,8.69-8.689v-33.575A8.7,8.7,0,0,0,2133.927,1601.252Zm-33.574,4.188h4.572v1.4a2.094,2.094,0,1,0,4.188,0v-1.4h15.356v1.4a2.094,2.094,0,1,0,4.188,0v-1.4h5.27a4.507,4.507,0,0,1,4.5,4.5v.385h-42.578v-.385A4.507,4.507,0,0,1,2100.353,1605.44Zm33.574,42.577h-33.574a4.507,4.507,0,0,1-4.5-4.5v-29h42.578v29A4.507,4.507,0,0,1,2133.927,1648.017Z"
                    fill="#007ab7" />
                  <g id="Group_220" data-name="Group 220">
                    <path id="Path_756" data-name="Path 756"
                      d="M2112.006,1635.76h-3.546v-13.669l-4.233,1.313v-2.883l7.4-2.65h.381Z" fill="#007ab7" />
                    <path id="Path_757" data-name="Path 757"
                      d="M2121.416,1625.257h1.89a2.664,2.664,0,0,0,2-.675,2.473,2.473,0,0,0,.65-1.791,2.188,2.188,0,0,0-.644-1.681,2.5,2.5,0,0,0-1.773-.6,2.619,2.619,0,0,0-1.706.558,1.786,1.786,0,0,0-.687,1.454H2117.6a4.359,4.359,0,0,1,.754-2.509,5.032,5.032,0,0,1,2.11-1.736,7.047,7.047,0,0,1,2.988-.626,6.686,6.686,0,0,1,4.442,1.355,4.63,4.63,0,0,1,1.607,3.736,3.758,3.758,0,0,1-.749,2.258,4.855,4.855,0,0,1-1.963,1.583,4.446,4.446,0,0,1,2.252,1.619,4.393,4.393,0,0,1,.742,2.553,4.7,4.7,0,0,1-1.736,3.816,6.985,6.985,0,0,1-4.6,1.435,6.616,6.616,0,0,1-4.374-1.411,4.608,4.608,0,0,1-1.7-3.73h3.546a2.053,2.053,0,0,0,.754,1.644,3.149,3.149,0,0,0,3.841-.031,2.307,2.307,0,0,0,.717-1.772q0-2.676-2.945-2.675h-1.877Z"
                      fill="#007ab7" />
                  </g>
                  <g id="Group_221" data-name="Group 221">
                    <path id="Path_758" data-name="Path 758"
                      d="M2102.958,1639.391l1.193,3.717,1.188-3.717h1.695v5.342h-1.291v-1.247l.125-2.554-1.291,3.8h-.851l-1.3-3.8.124,2.557v1.247h-1.288v-5.342Z"
                      fill="#007ab7" />
                    <path id="Path_759" data-name="Path 759"
                      d="M2112.751,1642.172a3.158,3.158,0,0,1-.289,1.384,2.149,2.149,0,0,1-.824.926,2.3,2.3,0,0,1-1.216.324,2.34,2.34,0,0,1-1.211-.313,2.134,2.134,0,0,1-.823-.9,3.039,3.039,0,0,1-.31-1.338v-.3a3.167,3.167,0,0,1,.288-1.385,2.128,2.128,0,0,1,.825-.926,2.441,2.441,0,0,1,2.434,0,2.16,2.16,0,0,1,.827.919,3.063,3.063,0,0,1,.3,1.367Zm-1.309-.224a2.247,2.247,0,0,0-.266-1.208.852.852,0,0,0-.761-.413q-.969,0-1.024,1.453l0,.392a2.319,2.319,0,0,0,.26,1.207.852.852,0,0,0,.775.422.842.842,0,0,0,.752-.414,2.255,2.255,0,0,0,.268-1.193Z"
                      fill="#007ab7" />
                    <path id="Path_760" data-name="Path 760"
                      d="M2118.252,1644.733h-1.28l-1.894-3.324v3.324h-1.287v-5.342h1.287l1.89,3.324v-3.324h1.284Z"
                      fill="#007ab7" />
                    <path id="Path_761" data-name="Path 761"
                      d="M2123.529,1640.386h-1.6v4.347h-1.288v-4.347h-1.574v-.995h4.465Z" fill="#007ab7" />
                    <path id="Path_762" data-name="Path 762"
                      d="M2128.912,1644.733h-1.281v-2.23h-1.9v2.23h-1.288v-5.342h1.288v2.121h1.9v-2.121h1.281Z"
                      fill="#007ab7" />
                    <path id="Path_763" data-name="Path 763"
                      d="M2132.857,1643.313a.527.527,0,0,0-.2-.44,2.478,2.478,0,0,0-.7-.327,6.725,6.725,0,0,1-.822-.326,1.556,1.556,0,0,1-1.038-1.4,1.249,1.249,0,0,1,.259-.782,1.666,1.666,0,0,1,.731-.529,2.855,2.855,0,0,1,1.065-.189,2.5,2.5,0,0,1,1.032.2,1.638,1.638,0,0,1,.71.586,1.526,1.526,0,0,1,.253.868h-1.284a.647.647,0,0,0-.2-.507.776.776,0,0,0-.541-.18.877.877,0,0,0-.545.153.449.449,0,0,0,.02.759,2.8,2.8,0,0,0,.774.345,4.714,4.714,0,0,1,.911.383,1.532,1.532,0,0,1,.865,1.376,1.306,1.306,0,0,1-.528,1.1,2.353,2.353,0,0,1-1.449.4,2.881,2.881,0,0,1-1.176-.233,1.77,1.77,0,0,1-.792-.638,1.657,1.657,0,0,1-.266-.934h1.291a.817.817,0,0,0,.222.633,1.047,1.047,0,0,0,.721.2.824.824,0,0,0,.5-.137A.451.451,0,0,0,2132.857,1643.313Z"
                      fill="#007ab7" />
                  </g>
                </g>
                <g id="Group_223" data-name="Group 223">
                  <circle id="Ellipse_36" data-name="Ellipse 36" cx="14.59" cy="14.59" r="14.59"
                    transform="translate(2064.5 1578.308)" fill="#00aeef" />
                  <text id="_6" data-name="6" transform="translate(2072.796 1598.745)" fill="#fff" font-size="20.009"
                    font-family="Roboto-Black, Roboto" font-weight="800" letter-spacing="0.05em">
                    <tspan x="0" y="0">6</tspan>
                  </text>
                </g>
              </g>
            </svg>

          </div>
          <div class="grid-title">
            <h3>Advanced maintenance every 13 months</h3>
          </div>
        </div>
      </div>
      <div class="steps-button-container flex justify-center">
        <a href="{{ url('our-plans') }}"
          class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
          <p>Our Plans</p>
        </a>
      </div>
    </div>
  </section>
  <section class="quality-services-section bg-quality-services-bg bg-cover bg-right relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg bg-white-grey/50 sm:bg-transparent mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-16 relative z-50">
      <div class="quality-services-container text-center">
        <div class="fade-in-element down text-blue-primary font-bold text-3xl md:text-4xl py-1">
          <h2>We Provide Quality Services</h2>
        </div>
        <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
        <div class="fade-in-element down quality-services-tag-line text-md md:text-lg font-light pb-4">
          <p>Any question? Just WhatsApp us!</p>
        </div>
        <div class="fade-in-element down quality-services-button-container flex justify-center">
          <a href="#"
            class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
            <p>Ask the Expert</p>
          </a>
        </div>
      </div>
    </div>
    <div class="hidden lg:block absolute -top-[99px] left-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
          </linearGradient>
        </defs>
        <path id="Path_725" data-name="Path 725" d="M1232.5,2009.514V1810.486l298,100.056Z"
          transform="translate(-1232.5 -1810.486)" fill="url(#linear-gradient)" />
      </svg>
  
    </div>
  </section>
  <section class="our-plans-section">
    <div
      class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      <div class="fade-in-element down our-plans-header flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title our-plans-header-container py-[40px]">
          <div class="our-plans-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>
            </div>
            <h2>Our Plans</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="our-plans-tag-line text-md md:text-lg font-light">
            <p>Choose from our selection of reputable brands in the market</p>
          </div>
        </div>
      </div>
      <div class="fade-in-element up flex flex-wrap pb-4 md:pb-8">
        @foreach($brands->chunk(3) as $brands)
          @if($brands[0])
            @include('partials.our-plan-brand', ['homepage' => true, 'brand' => $brands[0], 'container' => 'md:pr-4 sm:pr-4'])
          @endif
          @if($brands[1])
            @include('partials.our-plan-brand', ['homepage' => true, 'brand' => $brands[1], 'container' => 'md:px-4 sm:px-4'])
          @endif
          @if($brands[2])
            @include('partials.our-plan-brand', ['homepage' => true, 'brand' => $brands[2], 'container' => 'md:pl-4 sm:pl-4'])
          @endif
        @endforeach
      </div>
      <div class="button-container flex justify-center">
        <a href="{{ url('our-plans') }}"
          class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
          <p>Book Now!</p>
        </a>
      </div>
    </div>
  </section>
  <section class="our-services-section bg-landing-bg bg-cover relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      <div class="fade-in-element down our-services-header md:flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title  our-services-header-container  py-[40px]">
          <div class="our-services-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>
            </div>
            <h2>Other Services Provided</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="our-services-tag-line text-md md:text-lg font-light">
            <p>In addition to our core service, we offer a range of other services to cater to all your air conditioning needs:</p>
          </div>
        </div>
      </div>
      <div class="our-services-content md:flex gap-x-8  pb-4 md:pb-8">
        <div class="fade-in-element down left-container md:w-2/3 pb-4 md:pb-0">
          <div class="services flex flex-col gap-y-4">
            <div
              class="services-card bg-white rounded-t-xl px-8 py-4 flex flex-col md:flex-row justify-center text-center sm:text-left items-center gap-x-8 shadow-custom">
              <div class="left-icon w-20 sm:w-1/6 pb-4">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.05 72">
                  <title>CentriAir_MU</title>
                  <path
                    d="M69.41,44.12a1.79,1.79,0,0,0,2.06-1.75,35.75,35.75,0,0,0,.17-11.76c-.41-2.63-.51-2.7-3.14-2.68h0a2.42,2.42,0,0,1-2.72-2,10.47,10.47,0,0,0-1.26-3.1c-1.16-1.82-.91-3.29.81-4.63a1.65,1.65,0,0,0,.5-2.5,36.59,36.59,0,0,0-9.52-9.5,1.9,1.9,0,0,0-1.33-.38.78.78,0,0,0-.53.35c-2,3-4.42,2-6.68.7a4.55,4.55,0,0,0-.59-.25L47,6.58c-2.75-1-2.83-1.1-2.85-4,0-1.26-.43-1.78-1.6-2A35.25,35.25,0,0,0,29.25.66c-.56.12-1.48.45-1.31,1.47.57,3.43-1.81,4.37-3.65,4.78A4.07,4.07,0,0,0,23,7.5c-1.85,1.26-3.41,1-4.78-.8a1.64,1.64,0,0,0-2.52-.42,36.8,36.8,0,0,0-9.39,9.4c-.35.52-.82,1.48.07,2.11,2.79,2,1.89,4.22.8,6a5.07,5.07,0,0,0-.43.94l-.1.27c-1.09,2.81-1.21,2.89-4.08,2.94-1.16,0-1.69.38-1.87,1.32a34.64,34.64,0,0,0,0,13.61c.06.33.36,1.41,1.33,1.23,3.42-.66,4.43,1.57,5,3.85a3.81,3.81,0,0,0,.54,1.17c1.24,1.87,1,3.43-.85,4.78a1.61,1.61,0,0,0-.37,2.5,37.12,37.12,0,0,0,9.4,9.39c.33.22,1.44.88,2.13-.1a3.64,3.64,0,0,1,3-1.83,5.38,5.38,0,0,1,2.79,1,4,4,0,0,0,1.33.56c2.32.42,3.29,1.73,3,4-.16,1.16.35,1.77,1.71,2a37.56,37.56,0,0,0,12.28.16,2.69,2.69,0,0,0,1.89-.86,2.42,2.42,0,0,0,.31-1.84,2.61,2.61,0,0,1,2.1-3.23,19.12,19.12,0,0,0,3.59-1.49,2.51,2.51,0,0,1,3.49.6l.16.19a2.4,2.4,0,0,0,2,1.16l.13,0a1.92,1.92,0,0,0,.55-.22,35.17,35.17,0,0,0,9.74-9.75,1.25,1.25,0,0,0-.15-1.82c-2.81-1.92-2-4.14-.74-6.24a3.92,3.92,0,0,0,.31-.75c0-.11.07-.22.11-.32,1-2.73,1.16-2.85,3.86-2.85A.28.28,0,0,1,69.41,44.12ZM68.81,40c-.12.75-.34,1.14-1.25,1.21A5,5,0,0,0,63,44.85c-.53,1.46-1.14,2.85-1.72,4.14a4.89,4.89,0,0,0,.61,5.54l.15.17a1,1,0,0,1,.13,1.57,35.78,35.78,0,0,1-5.9,5.86,4.85,4.85,0,0,1-.41.28l-.38.23-.94-.77A4.87,4.87,0,0,0,49,61.28a39.5,39.5,0,0,1-4,1.65,5.07,5.07,0,0,0-3.84,4.62c-.08.86-.36,1.15-1.19,1.26a33,33,0,0,1-4,.25,32.28,32.28,0,0,1-4-.26c-.92-.11-1.13-.53-1.19-1.27-.16-2.28-1.42-3.79-3.83-4.61a42.88,42.88,0,0,1-4-1.66,4.75,4.75,0,0,0-5.5.64,1.33,1.33,0,0,1-2.05,0,38,38,0,0,1-5.28-5.26,1.4,1.4,0,0,1,0-2.17,4.7,4.7,0,0,0,.58-5.5,43.53,43.53,0,0,1-1.79-4.31A4.74,4.74,0,0,0,4.61,41.2c-1.1-.1-1.36-.6-1.45-1.43a36,36,0,0,1,0-7.63c.08-.76.33-1.23,1.35-1.32A4.82,4.82,0,0,0,9,27.25a35.36,35.36,0,0,1,1.46-3.53l.35-.77a4.74,4.74,0,0,0-.58-5.37,1.41,1.41,0,0,1-.06-2.17A38.54,38.54,0,0,1,15.53,10a1.25,1.25,0,0,1,1.92,0c1.65,1.47,3.55,1.66,5.8.58a36.83,36.83,0,0,1,3.83-1.59,4.89,4.89,0,0,0,3.73-4.49c.08-.93.39-1.26,1.3-1.37a32.83,32.83,0,0,1,7.8,0c1,.12,1.19.51,1.28,1.36A5,5,0,0,0,45,9.05c1.22.41,2.41.94,3.56,1.46l.58.26a4.67,4.67,0,0,0,5.35-.61,1.43,1.43,0,0,1,2.2,0,40.31,40.31,0,0,1,5.26,5.28c.51.63.84,1.17.05,2-1.46,1.59-1.66,3.43-.63,5.64.73,1.58,1.32,3,1.79,4.3a4.74,4.74,0,0,0,4.21,3.4c1.13.12,1.39.59,1.52,1.53A25.34,25.34,0,0,1,68.81,40Z"
                    fill="#007ab7" />
                  <path
                    d="M36,12.08h0a23.92,23.92,0,0,0,.12,47.84h0A23.89,23.89,0,0,0,52.94,19.11,23.83,23.83,0,0,0,36,12.08Zm4,37c0,.86,0,1.73,0,2.57,0,1.08,0,2.2,0,3.29a1.86,1.86,0,0,1-.37,1.44,1.8,1.8,0,0,1-1.38.5,2.21,2.21,0,0,0-.37,0l-.31,0c-1.06.09-1.92.16-2.62.16a3,3,0,0,1-2.11-.55c-.75-.7-.79-2-.79-4.55v-.16a2.54,2.54,0,0,1,0-.39,5.57,5.57,0,0,0-2.65-5.89,10,10,0,0,1-4.28-8.09,11.13,11.13,0,0,1,4.43-9l.41-.3v3.16c0,1.95,0,3.82,0,5.68s.33,2.17,2.21,2.18h3.21c1.58,0,3.16,0,4.73,0a2.11,2.11,0,0,0,1.58-.47,2.08,2.08,0,0,0,.46-1.56c0-1.93,0-3.82,0-5.81V28.47l.37.19c3.59,1.83,5.88,8.14,3.33,13.21a10.1,10.1,0,0,1-4.43,4.66A2.4,2.4,0,0,0,39.93,49.05Zm3.31,6.47-.33.11V49.77a1.44,1.44,0,0,1,1-1.3,3.13,3.13,0,0,0,.36-.22,13.82,13.82,0,0,0-2-23.49c-1.12-.57-1.89-.7-2.36-.42s-.7,1.05-.71,2.32v1.17c0,2.33,0,4.74,0,7.11,0,1-.31,1.3-1.29,1.34H37.8c-2.39.1-3.59.16-4.25-.48s-.66-1.83-.66-4.23c0-.53,0-1.06,0-1.59,0-1.19,0-2.39,0-3.58s-.26-1.73-.73-2-1.19-.2-2.16.26a13.82,13.82,0,0,0-2.32,23.43A3,3,0,0,1,29.1,51a28.88,28.88,0,0,0,0,3c0,.44,0,.89,0,1.33v.34l-.33-.1c-8.51-2.42-14.86-12.74-13.59-22.06A21,21,0,0,1,35.93,15h0C47,15,55.56,22.8,56.9,34A20.66,20.66,0,0,1,43.24,55.52Z"
                    fill="#007ab7" />
                </svg>
              </div>
              <div class="right-services sm:w-5/6 flex flex-col">
                <div class="text-black-title services-title font-bold text-xl">
                  <h2>General maintenance, gas refill and chemical cleaning</h2>
                </div>
                <div class="services-divider h-0.5 bg-blue-primary w-20 my-4 mx-auto sm:mx-0"></div>
                <div class="services-description">
                  <h3>Regular servicing and care of your air conditioning system are essential to keep it functioning effectively.</h3>
                </div>
              </div>
            </div>
            <div
              class="services-card bg-white px-8 py-4 flex flex-col md:flex-row justify-center text-center sm:text-left items-center gap-x-8 shadow-custom">
              <div class="left-icon w-20 sm:w-1/6 pb-4">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><title>CentriAir2_text</title><circle cx="35.77" cy="36" r="33.66" fill="#fff"/><path d="M36.08,0H36a36,36,0,0,0-.1,72H36a36,36,0,0,0,.1-72ZM59.36,59.51A32.89,32.89,0,0,1,36,69.17h-.12A33.14,33.14,0,0,1,12.64,12.49,32.89,32.89,0,0,1,36,2.83h.11A33.14,33.14,0,0,1,59.36,59.51Z" fill="#007ab7"/><circle cx="35.77" cy="36" r="33.66" fill="#fff"/><path d="M36.08,0H36a36,36,0,0,0-.1,72H36a36,36,0,0,0,.1-72ZM59.36,59.51A32.89,32.89,0,0,1,36,69.17h-.12A33.14,33.14,0,0,1,12.64,12.49,32.89,32.89,0,0,1,36,2.83h.11A33.14,33.14,0,0,1,59.36,59.51Z" fill="#007ab7"/><path d="M63.27,30.56A6.24,6.24,0,0,0,63,28.67,5.21,5.21,0,0,0,57.68,25H14a5.14,5.14,0,0,0-5.45,5.51V43.3a5.31,5.31,0,0,0,.25,1.88,5.12,5.12,0,0,0,5.28,3.63H48.64c3,0,6,0,9,.05a5.62,5.62,0,0,0,4.13-1.6,5.49,5.49,0,0,0,1.55-4.05c-.06-3-.05-6.14,0-9.13C63.26,32.89,63.26,31.73,63.27,30.56ZM61.5,43.23a3.47,3.47,0,0,1-3.79,3.82H14.41c-2.77,0-4.06-1.29-4.06-4.08V30.63c0-2.49,1.36-3.86,3.84-3.86H57.66c2.47,0,3.84,1.37,3.84,3.85Z" fill="#007ab7" stroke="#007ab7" stroke-miterlimit="10"/><path d="M52.59,40.88H19.29a5.16,5.16,0,0,0-.7,0,.82.82,0,0,0-.73.82.85.85,0,0,0,.74.88,4.16,4.16,0,0,0,.63,0H52.58a4.17,4.17,0,0,0,.73,0,.86.86,0,0,0,0-1.68A4.06,4.06,0,0,0,52.59,40.88Z" fill="#007ab7" stroke="#007ab7" stroke-miterlimit="10"/><path d="M55.29,30.31a.86.86,0,0,0-.84.88.84.84,0,0,0,.27.61.87.87,0,0,0,1.48-.64.84.84,0,0,0-.27-.61.87.87,0,0,0-.61-.24Z" fill="#007ab7" stroke="#007ab7" stroke-miterlimit="10"/></svg>
              </div>
              <div class="right-services sm:w-5/6 flex flex-col">
                <div class="text-black-title services-title font-bold text-xl">
                  <h2>Air conditioner dismantling and Installation</h2>
                </div>
                <div class="services-divider h-0.5 bg-blue-primary w-20 my-4 mx-auto sm:mx-0"></div>
                <div class="services-description">
                  <h3>Professional air conditioner dismantling and installation guarantees safety and optimal performance.</h3>
                </div>
              </div>
            </div>
            <div
              class="services-card bg-white rounded-b-xl px-8 py-4 flex flex-col md:flex-row justify-center text-center sm:text-left items-center gap-x-8 shadow-custom">
              <div class="left-icon w-20 sm:w-1/6 pb-4">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><title>CentriAir2_text</title><circle cx="35.77" cy="36" r="33.66" fill="#fff"/><path d="M36.08,0H36a36,36,0,0,0-.1,72H36a36,36,0,0,0,.1-72ZM59.36,59.51A32.89,32.89,0,0,1,36,69.17h-.12A33.14,33.14,0,0,1,12.64,12.49,32.89,32.89,0,0,1,36,2.83h.11A33.14,33.14,0,0,1,59.36,59.51Z" fill="#007ab7"/><path d="M54.34,38.29c-.14-.08-.15-.1-.15-.31V29.61A9.78,9.78,0,0,0,54,27.45,10.26,10.26,0,0,0,43.56,19H35.25c-.22,0-.25,0-.35-.19a2.71,2.71,0,0,0-2.32-1.33h0a2.68,2.68,0,0,0-2.3,1.31c-.11.19-.16.21-.39.21h0c-4.68,0-9.37,0-14,0a1,1,0,0,0-1.11,1.12c0,4.4,0,8.44,0,12.36a1.19,1.19,0,0,0,.27.87,1.15,1.15,0,0,0,.88.27c3.16,0,6.31,0,9.47,0h4.58c.23,0,.23,0,.31.14a2.7,2.7,0,0,0,2.32,1.36h0a2.79,2.79,0,0,0,2.37-1.36c.08-.14.1-.14.19-.14h4.07c.38,0,.41,0,.41.4v1.82c0,.75,0,1.49,0,2.24,0,.13,0,.13-.12.2a2.8,2.8,0,0,0-1.39,2.38A2.72,2.72,0,0,0,39.45,43c.15.09.16.1.16.31,0,1.79,0,3.58,0,5.38v3.53c0,1.75,0,3.51,0,5.26a1.06,1.06,0,0,0,.25.79,1,1,0,0,0,.81.26q6.24,0,12.48,0h0a1.05,1.05,0,0,0,.79-.26,1.08,1.08,0,0,0,.26-.83q0-4.38,0-8.74V43.29c0-.21,0-.22.14-.3a2.7,2.7,0,0,0,0-4.7Zm-7.44,2.6H41.16c-.36,0-.54-.09-.55-.25a.17.17,0,0,1,0-.12.76.76,0,0,1,.52-.14H52.64c.53,0,.54.17.54.25s0,.12,0,.13a.74.74,0,0,1-.51.13ZM35.34,26.3V25c0-1.16,0-2.31,0-3.47H39c1.69,0,3.37,0,5,0a7.82,7.82,0,0,1,7.68,7.66c0,1.64,0,3.28,0,4.93q0,1.88,0,3.75H42.09c0-1.3,0-2.6,0-3.89a2.67,2.67,0,0,0-2.86-2.87c-1.28,0-2.55,0-3.83,0h-.08v-.06c0-1.14,0-2.29,0-3.43ZM42.1,49.67V48c0-1.53,0-3.07,0-4.6v0h.06c3.16,0,6.33,0,9.49,0h.06v0q0,6.27,0,12.55h0c-3.19,0-6.38,0-9.56,0h0v-.07c0-1.53,0-3.05,0-4.58ZM32.83,32a1.51,1.51,0,0,1,0,.3c0,.3-.17.3-.25.29s-.24,0-.25-.29V20.44a.46.46,0,0,1,.14-.39.1.1,0,0,1,.08,0l.09,0c.1,0,.2.06.2.41V32ZM17.22,21.6v-.09H29.83v0c0,3.16,0,6.33,0,9.49v.07h-.1q-6.21,0-12.43,0h-.08V31C17.25,27.64,17.25,24.55,17.22,21.6Z" fill="#007ab7"/></svg>
              </div>
              <div class="right-services w-5/6 flex flex-col">
                <div class="text-black-title services-title font-bold text-xl">
                  <h2>Seamless concealment of air conditioner pipes</h2>
                </div>
                <div class="services-divider h-0.5 bg-blue-primary w-20 my-4 mx-auto sm:mx-0"></div>
                <div class="services-description">
                  <h3>It is an important aspect for aesthetics, space optimization and enhanced safety.</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fade-in-element up right-container md:w-1/3 h-auto shadow-custom">
          <img class="h-full object-cover"
            src="{{ url('theme/assets/photos/our-services.jpg') }}">
        </div>
      </div>
      <div class="fade-in-element up our-services-button-container flex justify-center">
        <a href="{{ url('our-services') }}"
          class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
          <p>Read More</p>
        </a>
      </div>
    </div>
    <div class="hidden lg:block absolute -top-[99px] right-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
          </linearGradient>
        </defs>
        <path id="Path_723" data-name="Path 723" d="M2376.5,1144.514V945.486l-298,100.056Z"
          transform="translate(-2078.5 -945.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <section class="brands">
    <div class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32">
      <div class="flex md:flex-row gap-y-8 justify-center gap-x-12 lg:justify-between">
        @foreach($brands as $brand)
        <div class="fade-in-element right md:up image-container h-10 flex">
          <img class="object-contain" alt="{{ $brand->logoUrl }}" src="{{ $brand->logoUrl }}">
        </div>
        @endforeach
      </div>
    </div>
    </section>
  <section class="contact-us-section bg-landing-bg bg-cover bg-right relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      <div class="fade-in-element down contact-us-header flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title contact-us-header-container">
          <div class="contact-us-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>

            </div>
            <h2>Get in touch</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="contact-us-tag-line text-md md:text-lg font-light pb-4">
            <p>Customer satisfaction is our top priority,</p>
            <p>Don’t hesitate to contact us</p>
          </div>
          <div class="contact-us-button-container flex justify-center gap-x-4">
            <a href="#" class="w-12 block">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                <title>CentriAir_MU</title>
                <circle cx="17" cy="17" r="17" fill="#007ab7" />
                <path
                  d="M14.73,11.81v2.43h-1.9v3.08h1.9v9.06h3.63v-9.1h2.53l.28-3H18.36V12.5c0-.72.14-1,.84-1h2V8.34H18.65C15.94,8.34,14.73,9.53,14.73,11.81Z"
                  fill="#fff" />
              </svg>

            </a>
            <a href="#" class="w-12 block">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                <title>CentriAir_MU</title>
                <circle cx="17" cy="17" r="17" fill="#007ab7" />
                <path
                  d="M18.16,8a8.8,8.8,0,0,0-8.82,8.38c0,.13,0,.26,0,.39a8.74,8.74,0,0,0,1.26,4.53L9,26l4.89-1.55a8.94,8.94,0,0,0,4.27,1.09A8.8,8.8,0,0,0,27,16.77v-.23A8.8,8.8,0,0,0,18.16,8Zm0,16.14a7.39,7.39,0,0,1-4.08-1.22l-2.86.91.93-2.74a7.31,7.31,0,0,1-1.42-4.32c0-.24,0-.48,0-.72a7.43,7.43,0,0,1,14.8.14,5.52,5.52,0,0,1,0,.58A7.41,7.41,0,0,1,18.16,24.14Z"
                  fill="#fff" />
                <path
                  d="M22.21,18.54c-.22-.11-1.28-.63-1.48-.7s-.34-.11-.49.11-.56.7-.68.84-.25.16-.47.05a5.83,5.83,0,0,1-1.75-1.07,6.27,6.27,0,0,1-1.2-1.48c-.12-.22,0-.33.1-.44l.32-.38.08-.1a2,2,0,0,0,.14-.26.4.4,0,0,0,0-.37l-.67-1.6c-.18-.43-.36-.36-.49-.36l-.41,0a.82.82,0,0,0-.58.27,2.42,2.42,0,0,0-.76,1.8,3,3,0,0,0,.11.73,4.92,4.92,0,0,0,.78,1.49,9,9,0,0,0,3.7,3.25c2.2.85,2.2.57,2.6.53a2.16,2.16,0,0,0,1.46-1,1.84,1.84,0,0,0,.13-1C22.57,18.7,22.43,18.65,22.21,18.54Z"
                  fill="#fff" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="conatct-us-divider h-0.5 bg-medium-grey w-3/4 my-4 mx-auto"></div>
      <div class="contact-us content md:flex gap-x-1 pt-8">
        <div class="fade-in-element down left-container md:w-1/2 pb-8 md:pb-0">
          <div class="company-branding pb-8 flex flex-col">
            <div class="logo-container w-40 sm:w-48 mb-[16px]">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 402.04 164">
                <title>CentriAir_MU</title>
                <path
                  d="M60.84,86.2q-.53,7.33-5.41,11.55T42.55,102q-8.73,0-13.74-5.88t-5-16.15V77.15A27.25,27.25,0,0,1,26.11,65.6a17.31,17.31,0,0,1,6.6-7.66,18.47,18.47,0,0,1,10-2.67q7.86,0,12.67,4.21t5.56,11.83H51.54c-.23-2.93-1-5.06-2.45-6.38s-3.54-2-6.41-2a8,8,0,0,0-7,3.35q-2.33,3.36-2.39,10.41v3.43q0,7.36,2.24,10.77c1.48,2.27,3.83,3.4,7,3.4q4.35,0,6.48-2C50.46,91,51.27,89,51.48,86.2Z"
                  fill="#333" />
                <path d="M133.63,106.35l15.49,21.57-7.48.57c-3-1.61-4.47-6-6.34-8.59q-4.71-6.78-9.41-13.55Z"
                  fill="#00aeef" fill-rule="evenodd" />
                <path d="M196.37,106.35h9.27l8.52,8.77c.23.26.46.51.68.77Z" fill="#00aeef" fill-rule="evenodd" />
                <path
                  d="M32.18,42.77l6.12-3.25A32.75,32.75,0,0,0,58.47,46v-.19L26.74,29.4l-.45-.57,3.85-1.91c4.15.8,8.21,4.08,11.56,5.92L69.12,47.16l15.56,2.29H37.45c-4.51-2-9.87-3.64-13.2-2.87-1.92.45-3.35,1.86-5.11,2.87H15L.23,41.62,0,41.24l11.78-5.16C15.68,37.9,25.19,44.3,32.18,42.77Z"
                  fill="#00aeef" fill-rule="evenodd" />
                <path
                  d="M173.43,49.45l.17-.77h-.46l-25.61-4.2q1.14-2.28,2.27-4.58l21.76,3.82L170,42.19c-1.44-2-14.87-4.06-18.81-4.39a3.62,3.62,0,0,1,1.13-2.1l4.76,1-.22-.58q-1.71-1.52-3.4-3c.22-.45.45-.89.68-1.34l4.76.77-.68-.58c-2.25-3.65-6.46-4.95-12-5.91v.19l3.17,3.05c-.23.45-.46.89-.68,1.34l-5.21-1v.19l3.39,3.44-1.35,1.72v-.38C139,31,137.86,24.37,129.4,22.15c3.2,5.81,18.4,12.6,12.47,18.9L124.19,23.67l-8.61,8.4-.68-.38-6.35-7.44,8.16-6.69L112,15.08l-7.47,5-2.72-3.25,1.81-1.72c-2.77-2.37-6.39-3-8.61-5.92.48-.71,1.2-.93,1.81-1.52L87,2.67,83.17,4.39l.46.19C86.38,6.93,90,7.43,92,10.5l-.23.38-2,1,.46.57c3.42.95,7.69,3.4,8.84,6.3L76.15,7.06c-.94.35-1.62.51-2,1.34l9.06,4.77c10,5.39,20.81,8.58,26.52,17.57l-33.54-17v.57l14,18.14-15.64-8C68.62,18.71,67.79,8.18,56.88,6.68l8.84,13-7.93-3.81-2.72-4.2c-3.24-1.56-6.86-.65-9.74-2.1L39.89,6.49c-1-1.26-1-2.84-2.5-3.63L24.25,0l3.17,6.11c6,1,11.43,2.26,15.41,5l3,4.59,5.89.95c3.85.86,8.23,2.61,10.65,4.77L32,16v.19c.55,1.05,1.11,2.67,2.27,3.24l12,2.1,25.84,4.59,9.06,5,6.8,3.44v.19h-.22l-41-6.68.22.38,40.57,21h7.33L67.08,35.13v-.19h1.36L97.9,39.52l13.6,7.06c.84,1,1.67,1.92,2.51,2.87h10.53a.52.52,0,0,1,.11-.38,5.37,5.37,0,0,0,.48.38h19.39a6.62,6.62,0,0,1,1.66-2.29h1.13c3.93,1.45,11.93,1.18,16.89,2.29Zm-52.64-6.11c-.45.7-.9,1.4-1.36,2.1-5.39-.37-16.69-5.32-19.94-8l-6.12-8c-1.24-1.58-5.86-5.46-5.44-7.25l6.35,3.24C104,30.43,115.13,34.78,120.79,43.34Zm19.49.57c-.72,1.29-1.7,3.9-3.62,4.2-8.87-2.18-12.24-5.48-16.77-11.07l6.8-7.45Z"
                  fill="#00aeef" fill-rule="evenodd" />
                <path
                  d="M100.62,107.49l-.65-1.14h18.27l3.46,5.72c-10.94-.25-11.28.07-14.5,6.49l6.34,10.5v.57L93.37,131,84.08,113.6v-.19L96.77,113Z"
                  fill="#00aeef" fill-rule="evenodd" />
                <path d="M147.41,106.35h12.75l-2.88,12.21v.38Z" fill="#00aeef" fill-rule="evenodd" />
                <path
                  d="M175.59,106.35H182l25.6,13.17L225,128.68c.3,1.59.61,3.18.91,4.77-1.62.61-7.65-3.55-9.52-4.58l-26.29-13.55a35.61,35.61,0,0,0,17.68,13.55c1.06,2-.06,5,.9,7.45,1.89,4.77,13,12.2,18.81,13.93,1.9,3.13,2.49,9.77,2.5,13.75h-.23l-19.26-10.31q-.34-4.2-.68-8.4l-7.25-8.4c-3.28-2.26-9.16-3.37-11.56-6.3v-6.87l-7-7.83-.22-.38h-.23q-.91,11.64-1.81,23.29l-9.07-4.39c-1.14-2.15,1.51-19.7,2.27-23.29Z"
                  fill="#00aeef" fill-rule="evenodd" />
                <path
                  d="M227.08,109.59c-1.21-1-2.37-2.14-3.56-3.24h9.22a20.2,20.2,0,0,0,11.34,2.86l11.33,9.92c.08.19.15.39.23.58l-7.71.57C243.05,117.08,237,107.28,227.08,109.59Z"
                  fill="#00aeef" fill-rule="evenodd" />
                <path d="M219.23,106.35l14.65,14.31,1.13,1-4.3.57-16.12-15.84Z" fill="#00aeef" fill-rule="evenodd" />
                <path
                  d="M99.73,81.48H82.49V93.15h20.23v7.22H76.45a2.94,2.94,0,0,1-2.94-2.94V59.72a2.94,2.94,0,0,1,2.94-2.93h26.21v7.27H82.49V74.45H99.73Z"
                  fill="#333" />
                <path
                  d="M150.61,100.37h-6.05L127.08,71.69v28.68h-9V59.72A2.93,2.93,0,0,1,121,56.79h6l17.51,28.73V56.79h8.95V97.43A2.94,2.94,0,0,1,150.61,100.37Z"
                  fill="#333" />
                <path
                  d="M203.76,64.06H190.42v36.31h-9V64.06H168.27V59.72a2.93,2.93,0,0,1,2.93-2.93h29.63a2.93,2.93,0,0,1,2.93,2.93Z"
                  fill="#333" />
                <path
                  d="M235.58,84.41h-7.15v16h-9V59.72a2.93,2.93,0,0,1,2.93-2.93h13.26q7.73,0,11.91,3.44T251.74,70a13.35,13.35,0,0,1-1.93,7.43A13.09,13.09,0,0,1,244,82.14L253.39,100v.42h-9.64Zm-7.15-7.27h7.24a7.41,7.41,0,0,0,5.24-1.72,6.14,6.14,0,0,0,1.85-4.74A6.56,6.56,0,0,0,241,65.83q-1.74-1.77-5.37-1.77h-7.21Z"
                  fill="#333" />
                <path d="M276.33,100.37h-6V59.72a2.93,2.93,0,0,1,2.93-2.93h6V97.43A2.94,2.94,0,0,1,276.33,100.37Z"
                  fill="#333" />
                <path d="M350.39,100.37h-6.05V59.72a2.94,2.94,0,0,1,2.94-2.93h6V97.43A2.94,2.94,0,0,1,350.39,100.37Z"
                  fill="#333" />
                <path
                  d="M384.23,84.41h-7.15v16h-9V59.72A2.93,2.93,0,0,1,371,56.79h13.26q7.72,0,11.91,3.44T400.39,70a13.35,13.35,0,0,1-1.93,7.43,13.09,13.09,0,0,1-5.85,4.75L402,100v.42H392.4Zm-7.15-7.27h7.24a7.41,7.41,0,0,0,5.24-1.72,6.14,6.14,0,0,0,1.85-4.74,6.56,6.56,0,0,0-1.75-4.85q-1.74-1.77-5.37-1.77h-7.21Z"
                  fill="#333" />
                <path
                  d="M270.86,113.05a1,1,0,0,1-.24.28.56.56,0,0,1-.3.08.77.77,0,0,1-.45-.18c-.17-.12-.38-.25-.64-.41a4.75,4.75,0,0,0-.9-.4,4,4,0,0,0-1.27-.18,3.67,3.67,0,0,0-1.21.18,2.58,2.58,0,0,0-.88.49,2.15,2.15,0,0,0-.53.74,2.32,2.32,0,0,0-.18.92,1.7,1.7,0,0,0,.32,1.05,2.88,2.88,0,0,0,.85.72,7.35,7.35,0,0,0,1.2.52l1.38.45a13.5,13.5,0,0,1,1.37.55,4.65,4.65,0,0,1,1.2.77,3.42,3.42,0,0,1,.85,1.15,3.73,3.73,0,0,1,.33,1.65,5.29,5.29,0,0,1-.36,2,4.48,4.48,0,0,1-1,1.59,4.66,4.66,0,0,1-1.68,1.07,6.11,6.11,0,0,1-2.26.4,7.19,7.19,0,0,1-1.47-.15,7.09,7.09,0,0,1-1.35-.42,6.9,6.9,0,0,1-1.2-.65,5.83,5.83,0,0,1-1-.85l.67-1.12a.72.72,0,0,1,.24-.22.54.54,0,0,1,.31-.09.91.91,0,0,1,.53.24,8.42,8.42,0,0,0,.75.53,5.33,5.33,0,0,0,1.07.54,4.2,4.2,0,0,0,1.51.24,4.34,4.34,0,0,0,1.3-.19,2.81,2.81,0,0,0,1-.55,2.42,2.42,0,0,0,.6-.87,2.87,2.87,0,0,0,.21-1.12,1.89,1.89,0,0,0-.32-1.13,2.68,2.68,0,0,0-.85-.74,5.48,5.48,0,0,0-1.2-.5l-1.37-.44a13.47,13.47,0,0,1-1.38-.52,4.54,4.54,0,0,1-1.19-.78,3.31,3.31,0,0,1-.85-1.2,4.41,4.41,0,0,1-.32-1.77,4.21,4.21,0,0,1,.33-1.64,4.07,4.07,0,0,1,1-1.4,4.72,4.72,0,0,1,1.56-1,5.56,5.56,0,0,1,2.11-.37,6.93,6.93,0,0,1,2.45.42,5.81,5.81,0,0,1,1.94,1.22Z"
                  fill="#333" />
                <path
                  d="M291.56,118.37a8.94,8.94,0,0,1-.56,3.25,7.42,7.42,0,0,1-1.6,2.55,7.24,7.24,0,0,1-2.48,1.67,8.95,8.95,0,0,1-6.39,0,7.14,7.14,0,0,1-2.48-1.67,7.57,7.57,0,0,1-1.6-2.55,9.52,9.52,0,0,1,0-6.49,7.71,7.71,0,0,1,1.6-2.56,7.28,7.28,0,0,1,2.48-1.67,8.81,8.81,0,0,1,6.39,0,7.38,7.38,0,0,1,2.48,1.67,7.56,7.56,0,0,1,1.6,2.56A9,9,0,0,1,291.56,118.37Zm-2.39,0a7.68,7.68,0,0,0-.39-2.53,5.38,5.38,0,0,0-1.09-1.9,4.77,4.77,0,0,0-1.72-1.2,6.24,6.24,0,0,0-4.5,0,4.86,4.86,0,0,0-1.72,1.2,5.55,5.55,0,0,0-1.1,1.9,8.65,8.65,0,0,0,0,5.07,5.51,5.51,0,0,0,1.1,1.89,4.73,4.73,0,0,0,1.72,1.2,6.38,6.38,0,0,0,4.5,0,4.65,4.65,0,0,0,1.72-1.2,5.33,5.33,0,0,0,1.09-1.89A7.7,7.7,0,0,0,289.17,118.37Z"
                  fill="#333" />
                <path d="M305.74,124.3v2h-9V110.48H299V124.3Z" fill="#333" />
                <path
                  d="M315.85,124.39a4.31,4.31,0,0,0,1.69-.32,3.5,3.5,0,0,0,1.27-.9,4.1,4.1,0,0,0,.79-1.37,5.48,5.48,0,0,0,.27-1.77v-9.55h2.33V120a7.15,7.15,0,0,1-.44,2.57A5.69,5.69,0,0,1,318.5,126a7,7,0,0,1-2.65.49,6.92,6.92,0,0,1-2.65-.49,5.63,5.63,0,0,1-2-1.34,5.82,5.82,0,0,1-1.27-2,7.38,7.38,0,0,1-.44-2.57v-9.55h2.34V120a5.48,5.48,0,0,0,.27,1.77,3.75,3.75,0,0,0,.79,1.38,3.38,3.38,0,0,0,1.26.9A4.37,4.37,0,0,0,315.85,124.39Z"
                  fill="#333" />
                <path d="M338.88,112.43h-5v13.84h-2.33V112.43h-5v-2h12.39Z" fill="#333" />
                <path d="M345.7,126.27h-2.35V110.48h2.35Z" fill="#333" />
                <path
                  d="M366.51,118.37a9.16,9.16,0,0,1-.56,3.25,7.42,7.42,0,0,1-1.6,2.55,7.24,7.24,0,0,1-2.48,1.67,8.95,8.95,0,0,1-6.39,0,7.14,7.14,0,0,1-2.48-1.67,7.57,7.57,0,0,1-1.6-2.55,9.52,9.52,0,0,1,0-6.49,7.71,7.71,0,0,1,1.6-2.56,7.28,7.28,0,0,1,2.48-1.67,8.81,8.81,0,0,1,6.39,0,7.38,7.38,0,0,1,2.48,1.67,7.56,7.56,0,0,1,1.6,2.56A9.19,9.19,0,0,1,366.51,118.37Zm-2.4,0a7.69,7.69,0,0,0-.38-2.53,5.53,5.53,0,0,0-1.09-1.9,4.86,4.86,0,0,0-1.72-1.2,6.24,6.24,0,0,0-4.5,0,4.86,4.86,0,0,0-1.72,1.2,5.4,5.4,0,0,0-1.1,1.9,8.65,8.65,0,0,0,0,5.07,5.35,5.35,0,0,0,1.1,1.89,4.73,4.73,0,0,0,1.72,1.2,6.38,6.38,0,0,0,4.5,0,4.73,4.73,0,0,0,1.72-1.2,5.49,5.49,0,0,0,1.09-1.89A7.71,7.71,0,0,0,364.11,118.37Z"
                  fill="#333" />
                <path
                  d="M384.58,110.48v15.79h-1.19a.88.88,0,0,1-.45-.1,1.32,1.32,0,0,1-.37-.32l-8.92-11.54c0,.2,0,.4,0,.59s0,.37,0,.54v10.83h-2.05V110.48h1.21a1.11,1.11,0,0,1,.46.07,1,1,0,0,1,.34.32l8.94,11.55c0-.21,0-.42-.05-.62s0-.39,0-.57V110.48Z"
                  fill="#333" />
                <path
                  d="M398.86,113.05a1.15,1.15,0,0,1-.23.28.62.62,0,0,1-.31.08.79.79,0,0,1-.45-.18c-.17-.12-.38-.25-.64-.41a4.75,4.75,0,0,0-.9-.4,4,4,0,0,0-1.27-.18,3.67,3.67,0,0,0-1.21.18,2.58,2.58,0,0,0-.88.49,2.15,2.15,0,0,0-.53.74,2.32,2.32,0,0,0-.18.92,1.7,1.7,0,0,0,.32,1.05,2.88,2.88,0,0,0,.85.72,7.35,7.35,0,0,0,1.2.52l1.38.45a12.63,12.63,0,0,1,1.37.55,4.65,4.65,0,0,1,1.2.77,3.42,3.42,0,0,1,.85,1.15,3.73,3.73,0,0,1,.33,1.65,5.29,5.29,0,0,1-.36,2,4.48,4.48,0,0,1-1,1.59,4.66,4.66,0,0,1-1.68,1.07,6.11,6.11,0,0,1-2.26.4,7.19,7.19,0,0,1-1.47-.15,7.09,7.09,0,0,1-1.35-.42,6.9,6.9,0,0,1-1.2-.65,5.83,5.83,0,0,1-1-.85l.67-1.12a.72.72,0,0,1,.24-.22.54.54,0,0,1,.31-.09.91.91,0,0,1,.53.24,8.42,8.42,0,0,0,.75.53,5.33,5.33,0,0,0,1.07.54,4.2,4.2,0,0,0,1.51.24,4.34,4.34,0,0,0,1.3-.19,2.81,2.81,0,0,0,1-.55,2.42,2.42,0,0,0,.6-.87,2.87,2.87,0,0,0,.21-1.12,1.89,1.89,0,0,0-.32-1.13,2.68,2.68,0,0,0-.85-.74,5.48,5.48,0,0,0-1.2-.5l-1.37-.44a13.47,13.47,0,0,1-1.38-.52,4.54,4.54,0,0,1-1.19-.78,3.31,3.31,0,0,1-.85-1.2,4.41,4.41,0,0,1-.32-1.77,4.21,4.21,0,0,1,.33-1.64,4.07,4.07,0,0,1,1-1.4,4.72,4.72,0,0,1,1.56-1,5.56,5.56,0,0,1,2.11-.37,6.93,6.93,0,0,1,2.45.42,5.81,5.81,0,0,1,1.94,1.22Z"
                  fill="#333" />
                <path
                  d="M323.38,100.37h9.55l-15.6-41.68a2.94,2.94,0,0,0-2.75-1.9h-4.24a2.93,2.93,0,0,0-2.75,1.91l-15.51,41.67h9.54l1.85-5.55h0l7.07-21.24,1.92-5.78,3.79,11.29h0l1.69,5h0l4.35,13h0Z"
                  fill="#333" />
                <polygon points="305.93 100.09 319.08 100.09 312.47 80.41 305.93 100.09" fill="#00aeef" />
              </svg>
            </div>
            <div class="text-black-title  company-name font-bold text-2xl uppercase">
              <h2>CentriAir Solutions Sdn Bhd</h2>
            </div>
            <div class="company-title text-md p">
              <h3>(1509505-X)</h3>
            </div>
          </div>
          <div class="company-details-container flex flex-col gap-y-2">
            <div class="company-details-row flex items-center gap-x-2 md:gap-x-8">
              <div class="company-details-icon w-8 md:w-12 flex-shrink-0">
                <svg class="h-full w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40">
                  <title>CentriAir_MU</title>
                  <path
                    d="M20,26.16H13.18c-1.63,0-2.23-.6-2.23-2.21V16c0-1.48.62-2.12,2.09-2.12H27c1.47,0,2.08.64,2.09,2.13V24c0,1.48-.62,2.12-2.09,2.12C24.62,26.17,22.29,26.16,20,26.16ZM20,25h7c.82,0,1-.14,1-.93V15.9c0-.79-.14-.93-1-.93H13c-.83,0-1,.14-1,1V24c0,.88.12,1,1,1Z"
                    fill="#007ab7" fill-rule="evenodd" />
                  <path
                    d="M20,21.4l5.35-4.71.37-.33c.3-.26.68-.41.9,0a.85.85,0,0,1-.15.82c-2,1.79-4,3.54-6,5.3a.66.66,0,0,1-1,0c-2-1.76-4-3.5-6-5.29a.89.89,0,0,1-.16-.82c.26-.43.64-.23,1,0l5,4.43Z"
                    fill="#007ab7" fill-rule="evenodd" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                </svg>
              </div>
              <div class="company-details">
                <h3>centriair@gmail.com</h3>
              </div>
            </div>
            <div class="company-details-row flex items-center gap-x-2 md:gap-x-8">
              <div class="company-details-icon w-8 md:w-12 flex-shrink-0">
                <svg class="h-full w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40">
                  <title>CentriAir_MU</title>
                  <path
                    d="M23.79,27.79A7,7,0,0,1,20.54,27a15.38,15.38,0,0,1-8-8.66,5.37,5.37,0,0,1-.28-3.07,3.61,3.61,0,0,1,.9-1.69q.41-.44.84-.84a1.77,1.77,0,0,1,2.49,0q.87.84,1.71,1.71a1.76,1.76,0,0,1,0,2.51,8.22,8.22,0,0,1-.66.66c-.16.14-.19.25,0,.45A15.91,15.91,0,0,0,22,22.49c.17.12.29.16.45,0a9.51,9.51,0,0,1,.71-.71,1.76,1.76,0,0,1,2.43,0c.61.58,1.2,1.18,1.79,1.8a1.63,1.63,0,0,1,.23,2.05A4.83,4.83,0,0,1,25,27.66,4.27,4.27,0,0,1,23.79,27.79Zm.12-1.19.43-.05a3.5,3.5,0,0,0,2-1.34.59.59,0,0,0,0-.94l-1.55-1.55a.6.6,0,0,0-1,0c-.35.34-.69.69-1,1a.63.63,0,0,1-.95.11,16.54,16.54,0,0,1-5.7-5.7.63.63,0,0,1,.1-.93c.35-.35.71-.69,1.06-1a.6.6,0,0,0,0-.94c-.52-.54-1-1.07-1.58-1.59a.6.6,0,0,0-1,0l-.61.59a2.57,2.57,0,0,0-.78,2.06,5.33,5.33,0,0,0,.37,1.77,14.37,14.37,0,0,0,7.79,8A6.4,6.4,0,0,0,23.91,26.6Z"
                    fill="#007ab7" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                </svg>
              </div>
              <div class="company-details">
                <h3>03-475 xxxx</h3>
              </div>
            </div>
            <div class="company-details-row flex items-start gap-x-2 md:gap-x-8">
              <div class="company-details-icon w-8 md:w-12 flex-shrink-0">
                <svg class="h-full w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40">
                  <title>CentriAir_MU</title>
                  <path
                    d="M28.59,16.13a13,13,0,0,1-1.46,5.7,47,47,0,0,1-4.21,6.75c-.74,1-1.48,2.09-2.21,3.14-.45.65-1,.65-1.41,0-1.68-2.45-3.39-4.87-5-7.36a19.47,19.47,0,0,1-2.56-5.62,8.6,8.6,0,1,1,16.73-3.93C28.54,15.32,28.56,15.85,28.59,16.13ZM20,30.23c.88-1.24,1.72-2.41,2.54-3.58a35.37,35.37,0,0,0,3.54-5.95,9.92,9.92,0,0,0,1-5.08A7.13,7.13,0,0,0,16.88,10a7,7,0,0,0-4,6.5,8.57,8.57,0,0,0,1,3.9,47.12,47.12,0,0,0,2.35,4.3C17.35,26.53,18.67,28.33,20,30.23Z"
                    fill="#007ab7" />
                  <path
                    d="M24.28,16.38A4.28,4.28,0,1,1,20,12.07,4.29,4.29,0,0,1,24.28,16.38Zm-7.13-.06a2.86,2.86,0,1,0,2.9-2.81A2.86,2.86,0,0,0,17.15,16.32Z"
                    fill="#007ab7" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                </svg>
              </div>
              <div class="company-details">
                <a class="hover:text-blue-primary" target="_blank" href="https://www.google.com/maps/place/VERVE+️+Suites+KL+South,+Verve+Suites+KL+South,+58200+Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur/@3.0918763,101.674384,17z/data=!4m9!1m2!2m1!1sB-2-10+Verve+Suites+KL+South,!3m5!1s0x31cc4bce82228653:0x644c34847a464648!8m2!3d3.0918763!4d101.674384!16s%2Fg%2F11qpjl65bq">
                  <div>B-2-10 Verve Suites KL South,<br/>
                  No. 355, Jalan Klang Lama 58200 Kuala Lumpur,<br/>
                  W.P. Kuala Lumpur Malaysia.</div></a>

                <div class="divider h-0.5 bg-blue-primary w-20 my-2 mx-0"></div>
                <a class="hover:text-blue-primary" target="_blank" href="https://goo.gl/maps/qyBGUA9dojyaTMPV8">
                  <div>20, 1st Flr. Lorong Bukit Kecil Indah,<br/>
                  Taman Bukit Kecil Indah,<br/>
                  14000 Bukit Mertajam, Penang.</div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="fade-in-element down right-container md:w-1/2">
          <div class="contact-us-form">
            {{ render_form($formName ?? 'contact_us') }}
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block absolute -top-[99px] left-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
          </linearGradient>
        </defs>
        <path id="Path_725" data-name="Path 725" d="M1232.5,2009.514V1810.486l298,100.056Z"
          transform="translate(-1232.5 -1810.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <footer
    class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-2 relative z-50">
    <div
      class="footer-container sm:flex pb-2 sm:pb-0 text-center sm:text-left justify-between font-light text-light-grey">
      <div class="copyright">@2023, Copyright CentriAir Solutions. All rights reserved</div>
      <div class="credits">Website designed by <a href="https://antwebstudio.com">Ant Web Studio</a></div>
    </div>
  </footer>
</body>

</html>

<script>
  expandMenu = () => {
    const menuBar = document.getElementById('menu-bar')
    if (menuBar.classList.contains('hidden')) {
      menuBar.classList.remove('hidden')
    } else {
      menuBar.classList.add('hidden')
    }
  }

  const callback = function(entries) {
    entries.forEach(entry => {

      if (entry.isIntersecting) {
        entry.target.classList.add('in-view')
      }
    });
  };

  document.addEventListener("DOMContentLoaded", function(){
    const targets = document.querySelectorAll(".fade-in-element");

    const observer = new IntersectionObserver(callback);

    targets.forEach(function(target) {
      observer.observe(target);
    });
  });
</script>