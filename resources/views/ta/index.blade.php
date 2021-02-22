@extends('layouts.app')


@section('content')

  <div class="container mx-auto ">
    <!-- Put the sections here -->
    {{-- 菜单部分 --}}
    <div class=" relative flex justify-between items-center py-4 bg-blue-900 " x-data="{ open: false }">
      <div class="flex-shrink-0 ml-10 cursor-pointer">
        <i class="fas fa-ship fa-2x text-yellow-400"></i>
        <span class="ml-1 text-3xl text-blue-200 font-semibold">船坞</span>
      </div>
      <div @click="open = true">
        <i class="fas fa-bars fa-2x visible md:invisible mr-10 md:mr-0 text-blue-200 cursor-pointer" ></i>
      </div>

      <ul class="hidden md:flex overflow-x-hidden mr-10 font-semibold"  >
        <li class="mr-6 p-1 border-b-2 border-yellow-400">
          <a class="text-blue-200 cursor-default" href="#">主页</a>
        </li>
        <li class="mr-6 p-1">
          <a class="text-white hover:text-blue-300" href="#">服务</a>
        </li>
        <li class="mr-6 p-1">
          <a class="text-white hover:text-blue-300" href="#">案例</a>
        </li>
        <li class="mr-6 p-1">
          <a class="text-white hover:text-blue-300" href="#">团队</a>
        </li>
        <li class="mr-6 p-1">
          <a class="text-white hover:text-blue-300" href="#">关于</a>
        </li>
        <li class="mr-6 p-1">
          <a class="text-white hover:text-blue-300" href="#">联络</a>
        </li>
      </ul>
      <ul class=" absolute right-0 z-10 top-14 w-28 text-center bg-blue-900 md:hidden" x-show="open" @click.away="open = false">
        <li class=" p-2 ">
          <a class="text-white hover:text-blue-300" href="/">主页</a>
        </li>
        <li class="p-2">
          <a class="text-white hover:text-blue-300" href="/">服务</a>
        </li>
        <li class=" p-2">
          <a class="text-white hover:text-blue-300" href="/">案例</a>
        </li>
        <li class="p-2">
          <a class="text-white hover:text-blue-300" href="/">团队</a>
        </li>
        <li class=" p-2">
          <a class="text-white hover:text-blue-300" href="/">关于</a>
        </li>
        <li class="p-2">
          <a class="text-white hover:text-blue-300" href="/">联络</a>
        </li>
      </ul>
    </div>
{{-- 服务部分 --}}
    <div class="w-full p-6 bg-blue-100">
      <div class="w-48 mx-auto pt-6 border-b-2 border-yellow-500 text-center text-2xl text-blue-700  ">定制服务</div>
        <div class="p-2 text-center flex-wrap text-gray-500">我们提供最好的网络开发解决方案</div>
      <div class="flex justify-center flex-wrap p-10">
        <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
          <div class="flex items-center w-48 h-20 bg-yellow-500">
            <i class="fas fa-bezier-curve fa-3x mx-auto text-white"></i>
          </div>
          <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">UI Design</p>
          <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
          <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-yellow-300 text-center cursor-pointer">
            <i class="fas fa-chevron-right mt-2 text-yellow-500"></i>
          </div>
        </div>
        <div>
          {{-- 第二个方框 --}}
        <div class=" relative w-48 h-64 m-5 bg-white shadow-lg">
          <div class=" flex bg-green-500 w-48 h-20 items-center">
            <i class="fas fa-laptop-code fa-3x mx-auto text-white"></i>
          </div>
          <p class=" text-center mx-2 py-2 border-b-2 text-gray-700 font-semibold uppercase">网站开发</p>
          <p class="mx-2 py-2 text-sm text-gray-700">一群拥有工匠精神的设计师和工程师的团队,为每一个客户提供最优质的产品和服务!</p>
          <div class=" w-8 h-8 bg-gray-300 absolute right-0 bottom-0 hover:bg-green-300 text-center cursor-pointer" >
            <i class="fas fa-chevron-right mt-2 text-green-500"></i>
          </div>
        </div>

        </div>

          <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
            <div class="flex items-center w-48 h-20 bg-yellow-500">
              <i class="fas fa-mobile-alt fa-3x mx-auto text-white"></i>
            </div>
            <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Mobile Apps</p>
            <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
            <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-yellow-300 text-center cursor-pointer">
              <i class="fas fa-chevron-right mt-2 text-yellow-500"></i>
            </div>
          </div>
          <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
            <div class="flex items-center w-48 h-20 bg-indigo-500">
              <i class="fas fa-search-dollar fa-3x mx-auto text-white"></i>
            </div>
            <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">SEO</p>
            <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
            <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-indigo-300 text-center cursor-pointer">
              <i class="fas fa-chevron-right mt-2 text-teal-500"></i>
            </div>
          </div>
        </div>
      </div>

{{-- 项目部分 --}}
      <div class="section bg-blue-200" x-data="{tab:'tab1'}">
        <div class="section-title">成功案例</div>
        <div class="section-subtitle">Explore our rich and diverse portfolio.</div>

        <nav class="flex justify-center flex-wrap mt-4 mb-8 text-white">
          <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">All</div>
          <div class="h-8 mr-2 px-3 py-1 bg-blue-800 text-center -skewx-20 {'active': tab === 'tab1'}" @click="tab = 'tab1'">UI Design</div>
          <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20 {'active': tab === 'tab2'" @click="tab = 'tab2'">Web Dev</div>
          <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">Mobile Apps</div>
          <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">SEO</div>
        </nav>

        {{-- UI Design --}}
        <div class="flex justify-center flex-wrap"  x-show="tab === 'tab1'"">
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" />
          </div>
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" alt="">
          </div>
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" alt="">
          </div>
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" alt="">
          </div>
        </div>
         {{-- Web Dev --}}
         <div class="flex justify-center flex-wrap" x-show="tab === 'tab2'">
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" />
          </div>
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" alt="">
          </div>
          <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-yellow-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
            <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="img/design2.jpeg" alt="">
          </div>
        </div>

      </div>
      {{-- 团队部分 --}}
  <div class="section bg-blue-100">
    <div class="section-title">团队成员</div>
    <div class="section-subtitle">我们在的各领域的专业工程师.</div>

    <div class="flex justify-center flex-wrap">
      <div class="w-48 m-4 py-2 bg-white shadow-lg">
        <img class="w-24 h-24 mx-auto rounded-full" src="img/monica.jpeg" />
        <p class="mx-2 mt-2 text-center text-lg text-gray-700 font-semibold">Jessica Thompson</p>
        <p class="text-center text-gray-600">UI Artisan</p>
        <div class="flex justify-center items-center mt-2">
          <i class="fab fa-facebook-square fa-2x mx-1 text-blue-500 hover:text-yellow-500 cursor-pointer"></i>
          <i class="fab fa-twitter-square fa-2x mx-1 text-blue-500 hover:text-yellow-500 cursor-pointer"></i>
          <i class="fab fa-google-plus-square fa-2x mx-1 text-blue-500 hover:text-yellow-500 cursor-pointer"></i>
        </div>
      </div>

      <div class="w-48 m-4 bg-white shadow-lg py-2">
        <img class="w-24 h-24 rounded-full mx-auto" src="img/alex.jpeg" alt="">
        <p class="mx-2 mt-2 text-lg text-center text-gray-700 font-semibold">Alexander Bell</p>
        <p class="text-center text-gray-600">Code Ninja</p>
        <div class="card-icons">
          <i class="fab fa-qq fa-2x  card-icon  "></i>
          <i class="fab fa-weixin fa-2x card-icon "></i>
          <i class="fab fa-weibo fa-2x card-icon "></i>
        </div>
      </div>
      <div class="card">
        <img class="card-image" src="img/jessica.jpeg" />
        <p class="card-title">Jessica Thompson</p>
        <p class="card-subtitle">UI Artisan</p>
        <div class="card-icons">
          <i class="fab fa-facebook-square fa-2x card-icon"></i>
          <i class="fab fa-twitter-square fa-2x card-icon"></i>
          <i class="fab fa-google-plus-square fa-2x card-icon"></i>
        </div>
      </div>
      <div class="card">
        <img class="card-image" src="img/monica.jpeg" />
        <p class="card-title">Jessica Thompson</p>
        <p class="card-subtitle">UI Artisan</p>
        <div class="card-icons">
          <i class="fab fa-facebook-square fa-2x card-icon"></i>
          <i class="fab fa-twitter-square fa-2x card-icon"></i>
          <i class="fab fa-google-plus-square fa-2x card-icon"></i>
        </div>
      </div>
    </div>
  </div>

  <div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>

    <ul
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>
</div>


  {{-- 底部部分 --}}
  <div class="w-full bg-blue-900">
    <div class="flex flex-wrap  text-white text-center">
      {{-- 关于栏 --}}
      <div class=" w-full md:w-1/3 p-5 md:text-left border-r border-blue-800">
        <div class="my-6 ml-3 text-xl font-semibold">ABOUT US</div>
        <p class="p-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa. Donec eget elementum sapien, tincidunt tempor nunc. Cras sodales id ipsum at convallis.</p>
        <p class="p-3 text-gray-400">Morbi tristique massa nec massa auctor, at scelerisque felis consectetur. Morbi tempus et odio sit amet feugiat. Maecenas dignissim a turpis in molestie. Fusce tincidunt vestibulum iaculis.</p>
      </div>
      {{-- 联系栏 --}}
      <div class="w-full md:w-1/3 p-5 text-center border-r border-blue-800"">
        <div class="my-6 text-xl font-semibold">CONTACT US</div>
        <p class="mt-8 text-gray-400">
          A108 Adam Street <br>
          New York, NY 535022 <br>
          United States <br>
          <strong>Phone:</strong> +1 5589 55488 55 <br>
          <strong>Email:</strong> info@webcraft.com
        </p>
        <div class="relative w-20 h-20 mx-auto my-12 bg-blue-300 rotate-45">
          <div class="flex justify-center items-center absolute left-0 top-0 w-10 h-10 hover:-ml-1 hover:-mt-1 bg-blue-800 cursor-pointer">
            <i class="fab fa-facebook-f fa-lg text-blue-500 -rotate-45"></i>
          </div>
          <div class="flex justify-center items-center absolute top-0 right-0 w-10 h-10 hover:-mt-1 hover:-mr-1 bg-blue-800 cursor-pointer">
            <i class="fab fa-twitter fa-lg text-blue-500 -rotate-45"></i>
          </div>
          <div class="flex justify-center items-center absolute right-0 bottom-0 w-10 h-10 hover:-mr-1 hover:-mb-1 bg-blue-800 cursor-pointer">
            <i class="fab fa-google-plus-g fa-lg text-blue-500 -rotate-45"></i>
          </div>
          <div class="flex justify-center items-center absolute bottom-0 left-0 w-10 h-10 hover:-mb-1 hover:-ml-1 bg-blue-800 cursor-pointer">
            <i class="fab fa-linkedin-in fa-lg text-blue-500 -rotate-45"></i>
          </div>
        </div>

      </div>
      {{-- 提交栏 --}}
      <div class="w-full md:w-1/3 p-5   ">
        <div class="mt-6 text-xl font-semibold">SAY HELLO!</div>
        <form class="w-4/5 mx-auto mt-2 px-6 pt-6 pb-4 rounded">
          <div class="flex items-center mb-4">
            <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Username">
          </div>
          <div class="flex items-center mb-4">
            <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Email">
          </div>
          <div class="mb-6">
            <textarea class="w-full h-24 px-2 pt-2 border-b-2 border-blue-800 bg-blue-900 text-white" placeholder="Message"></textarea>
          </div>
          <div class="flex justify-between items-center">
            <button class="w-full py-2 px-4 rounded bg-yellow-600 hover:bg-yellow-700 text-white font-bold" type="button">SEND</button>
          </div>
        </form>
      </div>
  </div>

</div>

@endsection
