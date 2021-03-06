<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="{{ $bodyClasses ?? '' }}">
    <div class="intro font-sans">
        <div class="container mx-auto text-center">
            <div class="inline-block mb-12">
                <svg width="217" height="56" viewBox="0 0 251 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.722 45.51C32.346 48.6633 30.798 51.4153 29.078 53.766C27.4153 56.0593 25.638 58.0087 23.746 59.614C21.9113 61.162 20.048 62.3087 18.156 63.054C16.264 63.7993 14.4293 64.172 12.652 64.172C10.8747 64.172 9.24067 63.7707 7.75 62.968C6.31667 62.1653 5.05534 60.9613 3.966 59.356C2.87667 57.7507 1.988 55.7727 1.3 53.422C0.669337 51.0713 0.354004 48.3193 0.354004 45.166C0.354004 39.7767 1.09934 34.4733 2.59 29.256C4.08067 23.9813 6.17334 19.2513 8.868 15.066C11.5627 10.8807 14.7447 7.52666 18.414 5.00399C22.1407 2.42399 26.24 1.13399 30.712 1.13399C32.088 1.13399 33.4067 1.42066 34.668 1.99399C35.9293 2.56732 37.0187 3.36999 37.936 4.40199C38.8533 5.43399 39.57 6.69532 40.086 8.18599C40.6593 9.67665 40.946 11.3393 40.946 13.174C40.946 13.518 40.946 13.8907 40.946 14.292C40.946 14.636 40.9173 15.0087 40.86 15.41L29.594 18.42C28.906 16.9867 28.1033 16.27 27.186 16.27C26.2687 16.27 25.294 16.8147 24.262 17.904C23.2873 18.936 22.3127 20.312 21.338 22.032C20.3633 23.6947 19.4173 25.5867 18.5 27.708C17.5827 29.772 16.78 31.8647 16.092 33.986C15.404 36.1073 14.8307 38.1427 14.372 40.092C13.9707 41.984 13.77 43.532 13.77 44.736C13.77 46.5707 13.9993 47.8607 14.458 48.606C14.974 49.3513 15.6333 49.724 16.436 49.724C17.0667 49.724 17.7833 49.4947 18.586 49.036C19.3887 48.52 20.134 47.8893 20.822 47.144C21.51 46.3413 22.1407 45.4527 22.714 44.478C23.2873 43.5033 23.6887 42.5287 23.918 41.554L33.722 45.51Z" fill="white"/>
                    <path d="M59.7854 61.248C58.008 61.248 56.116 61.3053 54.1094 61.42C52.16 61.5347 50.182 61.7067 48.1754 61.936C46.1687 62.1653 44.1907 62.4807 42.2414 62.882C40.3494 63.226 38.6294 63.656 37.0814 64.172C37.4254 61.592 37.8267 58.7253 38.2854 55.572C38.744 52.4187 39.26 49.1507 39.8334 45.768C40.464 42.3853 41.066 38.974 41.6394 35.534C42.27 32.094 42.9007 28.7973 43.5314 25.644C44.9647 18.1333 46.484 10.4793 48.0894 2.68199L63.1394 0.703986C61.5914 7.35466 60.1007 13.8333 58.6674 20.14C58.0367 22.8347 57.406 25.644 56.7754 28.568C56.1447 31.4347 55.5427 34.244 54.9694 36.996C54.396 39.748 53.88 42.414 53.4214 44.994C52.9627 47.574 52.59 49.8673 52.3034 51.874C53.7367 51.7593 55.256 51.702 56.8614 51.702C58.524 51.6447 59.986 51.616 61.2474 51.616C61.3047 52.7053 61.3907 53.7947 61.5054 54.884C61.62 55.916 61.7347 56.862 61.8494 57.722C62.0214 58.582 62.136 59.356 62.1934 60.044C62.308 60.6747 62.394 61.1047 62.4514 61.334C61.9927 61.334 61.534 61.334 61.0754 61.334C60.674 61.2767 60.244 61.248 59.7854 61.248Z" fill="white"/>
                    <path d="M66.1286 64.086L77.3945 2.93999L104.571 0.617988C104.169 1.87932 103.825 3.16932 103.539 4.48799C103.252 5.57732 102.965 6.72399 102.679 7.92799C102.449 9.07466 102.249 10.1067 102.077 11.024C101.503 11.0813 100.672 11.1387 99.5826 11.196C98.5505 11.196 97.4325 11.2247 96.2285 11.282C95.0245 11.282 93.7919 11.282 92.5305 11.282C91.3265 11.282 90.2659 11.282 89.3486 11.282L86.3385 26.676C88.1159 26.5613 89.7786 26.4753 91.3266 26.418C92.5879 26.3607 93.8779 26.332 95.1965 26.332C96.5152 26.332 97.4899 26.3033 98.1205 26.246C97.8912 27.8513 97.6619 29.428 97.4326 30.976C97.2606 32.524 97.0312 34.1007 96.7446 35.706C96.1712 35.7633 95.2252 35.8207 93.9066 35.878C92.6452 35.878 91.3552 35.9067 90.0365 35.964C88.5459 36.0213 86.9119 36.0787 85.1346 36.136L82.2106 51.96L94.7666 49.982L93.9066 59.786L66.1286 64.086Z" fill="white"/>
                    <path d="M129.839 62.28C128.406 62.5093 126.829 62.7673 125.109 63.054C123.389 63.3407 121.841 63.5987 120.465 63.828C120.694 61.936 120.924 60.0727 121.153 58.238C121.325 56.6327 121.468 55.0273 121.583 53.422C121.755 51.8167 121.898 50.4407 122.013 49.294H114.531L111.091 61.678C109.83 61.85 108.339 62.0507 106.619 62.28C104.899 62.452 103.294 62.624 101.803 62.796C99.9684 63.0253 98.1624 63.2547 96.3851 63.484C98.6784 55.8587 100.943 48.348 103.179 40.952C104.096 37.856 105.042 34.6167 106.017 31.234C107.049 27.8513 108.052 24.4973 109.027 21.172C110.059 17.7893 111.034 14.55 111.951 11.454C112.868 8.35799 113.671 5.51999 114.359 2.93999C118.258 2.65332 122.214 2.30932 126.227 1.90799C130.298 1.50665 134.254 0.961988 138.095 0.273987C137.923 2.10865 137.722 4.40199 137.493 7.15399C137.321 9.84866 137.149 12.8013 136.977 16.012C136.805 19.2227 136.633 22.5767 136.461 26.074C136.289 29.5713 136.117 33.0113 135.945 36.394C135.658 44.306 135.343 52.7053 134.999 61.592C133.279 61.8787 131.559 62.108 129.839 62.28ZM116.595 40.694C116.824 40.694 117.226 40.694 117.799 40.694C118.43 40.6367 119.06 40.608 119.691 40.608C120.379 40.5507 121.01 40.522 121.583 40.522C122.156 40.4647 122.558 40.4073 122.787 40.35C122.787 40.006 122.816 39.4327 122.873 38.63C122.988 37.77 123.074 36.824 123.131 35.792C123.246 34.7027 123.36 33.5273 123.475 32.266C123.59 31.0047 123.704 29.772 123.819 28.568C124.048 25.644 124.335 22.4907 124.679 19.108L125.195 11.626L123.905 11.712L121.927 19.108L116.595 40.694Z" fill="white"/>
                    <path d="M142.65 64.774C143.396 56.7473 144.084 48.864 144.714 41.124C145.001 37.9133 145.259 34.5307 145.488 30.976C145.775 27.4213 146.004 23.924 146.176 20.484C146.406 16.9867 146.578 13.6327 146.692 10.422C146.807 7.15399 146.893 4.17266 146.95 1.47799C148.326 1.47799 149.788 1.44932 151.336 1.39199C152.942 1.33466 154.375 1.27732 155.636 1.21999C156.955 1.16266 158.073 1.10532 158.99 1.04799C159.908 0.933322 160.366 0.875989 160.366 0.875989C159.736 7.52666 159.191 13.002 158.732 17.302C158.274 21.5447 157.901 25.0133 157.614 27.708C157.385 30.3453 157.156 32.8967 156.926 35.362C156.754 37.8273 156.554 40.1207 156.324 42.242C156.095 44.3633 155.894 46.1693 155.722 47.66H157.27L166.902 1.90799C168.45 1.85065 170.027 1.76465 171.632 1.64999C173.066 1.53532 174.556 1.44932 176.104 1.39199C177.71 1.33466 179.172 1.21999 180.49 1.04799C179.688 3.57066 178.856 6.35132 177.996 9.38999C177.194 12.4287 176.334 15.582 175.416 18.85C174.556 22.118 173.696 25.4433 172.836 28.826C172.034 32.2087 171.231 35.4767 170.428 38.63C168.594 46.026 166.759 53.6227 164.924 61.42L142.65 64.774Z" fill="white"/>
                    <path d="M174.29 64.086L185.556 2.93999L212.732 0.617988C212.331 1.87932 211.987 3.16932 211.7 4.48799C211.414 5.57732 211.127 6.72399 210.84 7.92799C210.611 9.07466 210.41 10.1067 210.238 11.024C209.665 11.0813 208.834 11.1387 207.744 11.196C206.712 11.196 205.594 11.2247 204.39 11.282C203.186 11.282 201.954 11.282 200.692 11.282C199.488 11.282 198.428 11.282 197.51 11.282L194.5 26.676C196.278 26.5613 197.94 26.4753 199.488 26.418C200.75 26.3607 202.04 26.332 203.358 26.332C204.677 26.332 205.652 26.3033 206.282 26.246C206.053 27.8513 205.824 29.428 205.594 30.976C205.422 32.524 205.193 34.1007 204.906 35.706C204.333 35.7633 203.387 35.8207 202.068 35.878C200.807 35.878 199.517 35.9067 198.198 35.964C196.708 36.0213 195.074 36.0787 193.296 36.136L190.372 51.96L202.928 49.982L202.068 59.786L174.29 64.086Z" fill="white"/>
                    <path d="M206.697 64.086C208.245 56.4607 209.736 49.0073 211.169 41.726C211.685 38.63 212.258 35.4193 212.889 32.094C213.52 28.7113 214.093 25.386 214.609 22.118C215.182 18.7927 215.698 15.6107 216.157 12.572C216.673 9.47599 217.074 6.66666 217.361 4.14399C220.629 3.11199 224.155 2.36665 227.939 1.90799C231.723 1.39199 235.478 1.13399 239.205 1.13399C241.441 1.13399 243.276 1.39199 244.709 1.90799C246.2 2.42399 247.346 3.16932 248.149 4.14399C249.009 5.06132 249.611 6.15066 249.955 7.41199C250.299 8.67332 250.471 10.078 250.471 11.626C250.471 13.9193 250.07 16.184 249.267 18.42C248.464 20.5987 247.375 22.6913 245.999 24.698C244.68 26.6473 243.132 28.4533 241.355 30.116C239.635 31.7213 237.772 33.04 235.765 34.072C236.797 36.3653 237.886 38.888 239.033 41.64C240.237 44.3347 241.355 46.9147 242.387 49.38C243.534 52.2467 244.709 55.1133 245.913 57.98L232.583 62.624C231.436 58.668 230.404 54.9413 229.487 51.444C229.086 50.0107 228.684 48.5487 228.283 47.058C227.882 45.51 227.509 44.0767 227.165 42.758C226.821 41.382 226.534 40.178 226.305 39.146C226.076 38.114 225.932 37.3113 225.875 36.738L224.757 37.082C224.413 38.9167 223.983 41.1527 223.467 43.79C223.008 46.4273 222.578 48.9787 222.177 51.444C221.661 54.368 221.145 57.378 220.629 60.474L206.697 64.086ZM226.907 26.762C227.996 26.6473 229.315 26.1887 230.863 25.386C232.468 24.5833 233.988 23.6373 235.421 22.548C236.854 21.4013 238.087 20.226 239.119 19.022C240.151 17.818 240.667 16.7573 240.667 15.84C240.667 15.2093 240.466 14.722 240.065 14.378C239.664 13.9767 239.09 13.69 238.345 13.518C237.657 13.2887 236.883 13.1453 236.023 13.088C235.163 13.0307 234.274 13.002 233.357 13.002C232.726 13.002 232.067 13.0307 231.379 13.088C230.748 13.088 230.175 13.088 229.659 13.088L226.907 26.762Z" fill="white"/>
                </svg>
            </div>
            <h1 class="px-4 text-3xl md:text-4xl font-thin text-white leading-snug">A <span class="font-medium">blazing-fast</span> static site generator using Laravel's Blade templates</h1>
            <p class="px-8 text-white mt-4 text-base md:text-lg leading-relaxed">Cleaver is a PHP static site generator that helps you rapidly develop websites using <strong>Laravel's Blade</strong> templating engine, <strong>JSON</strong> or <strong>Markdown</strong> content files and the utility-first <strong>Tailwind</strong> CSS library.</p>
            <div class="mt-12">
                <a href="/docs" class="inline-block mx-2 bg-white text-pink-600 px-5 py-3 rounded text-sm font-semibold hover:shadow-md transition">Documentation</a>
                <a href="https://github.com/aschmelyun/cleaver" class="inline-block mx-2 border-white border text-white px-5 py-3 rounded text-sm font-semibold hover:shadow-md hover:bg-pink-600 transition">View Source</a>
            </div>
            <p class="mt-3 text-white opacity-50 text-sm font-semibold">Version 1.5.5</p>
        </div>
    </div>
    <div class="container bg-gray-800 rounded-none md:rounded-lg mx-auto -mt-8 py-6 px-6 md:px-12 shadow-xl">
        <pre class="text-white whitespace-pre-wrap">composer create-project aschmelyun/cleaver your-site-name</pre>
    </div>
    <div class="container mx-auto text-gray-900">
        <div class="flex flex-col md:flex-row items-center my-12">
            <div class="flex-1 pl-6 pr-6 md:pl-0 md:pr-4 mb-12 md:mb-0">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="inline-block" viewBox="0 0 66 45" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" width="64" height="64" font-family="Roboto" font-size="14px" text-anchor="middle"><defs><style type="text/css"></style></defs><use xlink:href="#L" x=".5" y=".5"></use><symbol id="L" overflow="visible"><path d="M39.755 43.554c-.347.001-.67-.18-.847-.48L31.453 30.64 17.5 34.44c-.437.105-.89-.1-1.1-.495L.117 3.31c-.153-.285-.156-.626-.01-.914s.426-.485.746-.528L14.687.01c.39-.054.776.13.98.468l16.7 27.87 19.406-5.277-6.47-9.14c-.19-.264-.24-.604-.13-.9s.364-.538.678-.62l9.08-2.146c.37-.088.758.045.996.34l7.857 9.8c.208.26.272.606.168.923s-.36.56-.68.645l-8.253 2.25 7.224 10.18c.18.253.23.575.136.87s-.322.53-.615.63L40.07 43.483c-.1.037-.207.058-.314.06zM33.427 30.1l6.757 11.268 19.692-6.894-6.878-9.695zM2.52 3.62l15.247 28.7 12.655-3.433L14.306 2.052zm45.25 10.366l6.052 8.534 7.527-2.047-6.55-8.155z" stroke="none" fill="#ef533f" fill-rule="nonzero"></path></symbol></svg>
                </div>
                <h2 class="block text-center text-2xl font-semibold mb-2">Laravel Blade</h2>
                <p class="leading-relaxed text-gray-700">Use the power of Blade to quickly craft templates and modularize your site code. Any Laravel veterans will feel right at home, while those inexperienced users should be able to pick up the easy syntax of the templating engine in no time.</p>
            </div>
            <div class="flex-1 pl-6 pr-6 md:pl-0 md:pr-4">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="inline-block" viewBox="0 0 66 40" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" width="64" height="64" font-family="Roboto" font-size="14px" text-anchor="middle"><use xlink:href="#B" x=".5" y=".5"></use><defs><style type="text/css"></style><linearGradient x1="0.00%" y1="-88.89%" y2="188.89%" id="A" x2="100.00%"><stop stop-color="#2383ae" offset="0%"></stop><stop stop-color="#6dd7b9" offset="100%"></stop></linearGradient></defs><symbol id="B" overflow="visible"><path d="M16 12.8C18.133 4.267 23.467 0 32 0c12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8zM0 32c2.133-8.533 7.467-12.8 16-12.8 12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8z" stroke="none" fill="url(#A)"></path></symbol></svg>
                </div>
                <h2 class="block text-center text-2xl font-semibold mb-2">Tailwind</h2>
                <p class="leading-relaxed text-gray-700">Out of the box Cleaver includes the popular Tailwind CSS library. Using a utility-first approach to styling elements means less time tweaking elements on the front-end, letting you scaffold and prototype a website much faster.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-12 mb-20">
            <div class="flex-1 pl-6 pr-6 md:pl-0 md:pr-4 mb-12 md:mb-0">
                <div class="text-center" style="height: 64px">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="inline-block" viewBox="0 0 65 65" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" width="56" height="56" font-family="Roboto" font-size="14px" text-anchor="middle"><use xlink:href="#JJJ" x=".5" y=".5"></use><defs><style type="text/css"></style><linearGradient x1="15.79%" y1="14.74%" x2="91.00%" y2="85.23%" id="J"><stop offset="0%"></stop><stop offset="100%" stop-color="#fff"></stop></linearGradient><linearGradient x1="82.14%" y1="85.24%" x2="-3.11%" y2="14.79%" id="JJ"><stop offset="0%"></stop><stop offset="100%" stop-color="#fff"></stop></linearGradient></defs><symbol id="JJJ" overflow="visible"><g stroke="none"><path d="M31.946 47.64c14.16 19.302 28.016-5.388 28-20.235C59.917 9.85 42.125.04 31.934.04 15.577.04 0 13.558 0 32.054 0 52.612 17.856 64 31.934 64c-3.186-.46-13.802-2.734-13.945-27.187-.096-16.54 5.395-23.146 13.922-20.24.19.07 9.406 3.706 9.406 15.58 0 11.824-9.37 15.486-9.37 15.486z" fill="url(#J)"></path><path d="M31.93 16.56c-9.356-3.224-20.817 4.487-20.817 19.932C11.112 61.71 29.8 64 32.066 64 48.423 64 64 50.48 64 31.985 64 11.427 46.144.04 32.066.04c3.9-.54 21.016 4.22 21.016 27.615 0 15.256-12.78 23.562-21.094 20.013-.19-.07-9.406-3.706-9.406-15.58 0-11.824 9.347-15.527 9.347-15.527z" fill="url(#J)"></path></g></symbol></svg>
                </div>
                <h2 class="block text-center text-2xl font-semibold mb-2">JSON</h2>
                <p class="leading-relaxed text-gray-700">Aiming for ease of use with data-driven pages, Cleaver gives you the ability to use JSON as content files. Each key's value is parsed out and accessible through the requested Blade template as a variable with the key name.</p>
            </div>
            <div class="flex-1 pl-6 pr-6 md:pl-0 md:pr-4">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" class="inline-block" viewBox="0 0 208 128"><rect width="198" height="118" x="5" y="5" ry="10" stroke="#000" stroke-width="10" fill="none"/><path d="M30 98V30h20l20 25 20-25h20v68H90V59L70 84 50 59v39zm125 0l-30-33h20V30h20v35h20z"/></svg>
                </div>
                <h2 class="block text-center text-2xl font-semibold mb-2">Markdown</h2>
                <p class="leading-relaxed text-gray-700">For heavier content-driven pages, you have the ability to use Markdown content files as well. Key:value pairs for the layout, path, and others are taken as variables from the top section, while the rest of the markup is parsed as content.</p>
            </div>
        </div>
    </div>
    <div class="container bg-gray-800 rounded-none md:rounded-lg mx-auto pt-4 pb-6 px-6 md:px-12 shadow-xl text-sm md:text-base">
        <span class="font-mono text-white font-bold text-sm opacity-25 block mb-3">content/blog.json</span>
        <pre class="text-white whitespace-pre-wrap">
{
    <span class="text-purple-500">"view"</span>: <span class="text-green-500">"layout.default"</span>,
    <span class="text-purple-500">"path"</span>: <span class="text-green-500">"/blog"</span>,
    <span class="text-purple-500">"title"</span>: <span class="text-green-500">"Welcome to my blog!"</span>,
    <span class="text-purple-500">"posts"</span>: [
        {
            <span class="text-purple-500">"title"</span>: <span class="text-green-500">"How to containerize your life"</span>,
            <span class="text-purple-500">"link"</span>: <span class="text-green-500">"/blog/how-to-containerize-your-life"</span>
        },
        {
            <span class="text-purple-500">"title"</span>: <span class="text-green-500">"Using Tailwind on my smart fridge"</span>,
            <span class="text-purple-500">"link"</span>: <span class="text-green-500">"/blog/using-tailwind-on-my-smart-fridge"</span>
        }
    ]
}</pre>
    </div>
    <div class="container mx-auto text-center mt-3 mb-16 px-6 md:px-0">
        <p class="text-sm leading-relaxed text-gray-700"><strong>First</strong> add in your content saved as either a JSON or Markdown file in the content directory.</p>
    </div>
    <div class="container bg-gray-800 rounded-none md:rounded-lg mx-auto pt-4 pb-6 px-6 md:px-12 shadow-xl text-sm md:text-base">
        <span class="font-mono text-white font-bold text-sm opacity-25 block mb-3">layout/default.blade.php</span>
        <pre class="text-white whitespace-pre-wrap">
&#x3C;<span class="text-red-500">html</span> <span class="text-yellow-500">lang</span><span class="text-green-500">=&#x22;</span>&#x7B;&#x7B; $lang ?? <span class="text-green-500">'en'</span> &#x7D;&#x7D;<span class="text-green-500">&#x22;</span>&#x3E;
&#x3C;<span class="text-red-500">body</span>&#x3E;
    &#x3C;<span class="text-red-500">h1</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;page-title&#x22;</span>&#x3E;&#x7B;&#x7B; $title &#x7D;&#x7D;&#x3C;/<span class="text-red-500">h1</span>&#x3E;
    <span class="text-purple-500">&#x40;foreach(</span>$posts <span class="text-purple-500">as</span> $post<span class="text-purple-500">)</span>
        &#x3C;<span class="text-red-500">div</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;post&#x22;</span>&#x3E;
            &#x3C;<span class="text-red-500">h3</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;post-title&#x22;</span>&#x3E;&#x7B;&#x7B; $post-&#x3E;<span class="text-red-500">title</span> &#x7D;&#x7D;&#x3C;/<span class="text-red-500">h3</span>&#x3E;
            &#x3C;<span class="text-red-500">a</span> <span class="text-yellow-500">href</span><span class="text-green-500">=&#x22;</span>&#x7B;&#x7B; $post-&#x3E;<span class="text-red-500">link</span> &#x7D;&#x7D;<span class="text-green-500">&#x22;</span>&#x3E;Read More&#x3C;/<span class="text-red-500">a</span>&#x3E;
        &#x3C;/<span class="text-red-500">div</span>&#x3E;
    <span class="text-purple-500">&#x40;endforeach</span>
    <span class="text-white opacity-25">&#x3C;&#x21;&#x2D;&#x2D; Using markdown? Access content with &#x7B;&#x21;&#x21; $content &#x21;&#x21;&#x7D; &#x2D;&#x2D;&#x3E;</span>
&#x3C;/<span class="text-red-500">body</span>&#x3E;
&#x3C;/<span class="text-red-500">html</span>&#x3E;</pre>
    </div>
    <div class="container mx-auto text-center mt-3 mb-16 px-6 md:px-0">
        <p class="text-sm leading-relaxed text-gray-700"><strong>Then</strong> write your Blade template, using the keys from your content file as variables.</p>
    </div>
    <div class="container bg-gray-800 rounded-none md:rounded-lg mx-auto pt-4 pb-6 px-6 md:px-12 shadow-xl text-sm md:text-base">
        <span class="font-mono text-white font-bold text-sm opacity-25 block mb-3">dist/blog/index.html</span>
        <pre class="text-white whitespace-pre-wrap">
&#x3C;<span class="text-red-500">html</span> <span class="text-yellow-500">lang</span><span class="text-green-500">=&#x22;en&#x22;</span>&#x3E;
&#x3C;<span class="text-red-500">body</span>&#x3E;
    &#x3C;<span class="text-red-500">h1</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;page-title&#x22;</span>&#x3E;Welcome to my blog!&#x3C;/<span class="text-red-500">h1</span>&#x3E;
    &#x3C;<span class="text-red-500">div</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;post&#x22;</span>&#x3E;
        &#x3C;<span class="text-red-500">h3</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;post-title&#x22;</span>&#x3E;How to containerize your life&#x3C;/<span class="text-red-500">h3</span>&#x3E;
        &#x3C;<span class="text-red-500">a</span> <span class="text-yellow-500">href</span><span class="text-green-500">=&#x22;/blog/how-to-containerize-your-life&#x22;</span>&#x3E;Read More&#x3C;/<span class="text-red-500">a</span>&#x3E;
    &#x3C;/<span class="text-red-500">div</span>&#x3E;
    &#x3C;<span class="text-red-500">div</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;post&#x22;</span>&#x3E;
        &#x3C;<span class="text-red-500">h3</span> <span class="text-yellow-500">class</span><span class="text-green-500">=&#x22;post-title&#x22;</span>&#x3E;Using Tailwind on my smart fridge&#x3C;/<span class="text-red-500">h3</span>&#x3E;
        &#x3C;<span class="text-red-500">a</span> <span class="text-yellow-500">href</span><span class="text-green-500">=&#x22;/blog/using-tailwind-on-my-smart-fridge&#x22;</span>&#x3E;Read More&#x3C;/<span class="text-red-500">a</span>&#x3E;
    &#x3C;/<span class="text-red-500">div</span>&#x3E;
&#x3C;/<span class="text-red-500">body</span>&#x3E;
&#x3C;/<span class="text-red-500">html</span>&#x3E;</pre>
    </div>
    <div class="container mx-auto text-center mt-3 mb-16 px-6 md:px-0">
        <p class="text-sm leading-relaxed text-gray-700"><strong>Finally</strong> Cleaver outputs your rendered HTML to the path that was set in your content, nested in the dist directory.</p>
    </div>
    <div class="bg-gray-200 py-12">
        <div class="container bg-white rounded-none md:rounded-lg mx-auto py-6 px-12 shadow-xl">
            <pre class="text-gray-700 whitespace-pre-wrap">> Ready to get started? <a href="/docs" class="font-semibold">Check out the documentation.</a></pre>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
