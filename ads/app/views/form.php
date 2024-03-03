 <form action="dangky" name="dangkyform" method="post" id="form-results" data-te-active-validation="true">

     <div class="flex flex-col">
         <div data-te-input-wrapper-init data-te-validate="input" data-te-validation-ruleset="isRequired|isString"
             class="m-form relative w-full h-[8vw]   lg:h-[4.166666666666667vw] ">
             <input name="hoten" id="hoten"
                 class="peer w-full h-full rounded-full outline outline-0 focus:outline-0 transition-all text-sm px-3 py-2.5"
                 placeholder=" ">
             <label
                 class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-focus:hidden peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 before:pointer-events-none before:transition-all after:block after:flex-grow after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 after:pointer-events-none peer-placeholder-shown:leading-[4.5] text-gray-500 peer-focus:text-gray-900  ">
                 Họ và tên *
             </label>
         </div>




         <div data-te-input-wrapper-init data-te-validate="input"
             data-te-validation-ruleset="isRequired|isNumber|myphone"
             class="m-form relative w-full h-[8vw] lg:h-[4.166666666666667vw]">
             <input name="sdt" id="sdt"
                 class="peer w-full h-full rounded-full outline outline-0 focus:outline-0 transition-all text-sm px-3 py-2.5"
                 placeholder=" ">
             <label
                 class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-focus:hidden peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 before:pointer-events-none before:transition-all after:block after:flex-grow after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 after:pointer-events-none peer-placeholder-shown:leading-[4.5] text-gray-500 peer-focus:text-gray-900  ">
                 Số điện thoại *
             </label>
         </div>


         <div data-te-input-wrapper-init data-te-validate="input" data-te-validation-ruleset="isRequired"
             class="m-form relative w-full h-[8vw] lg:h-[4.166666666666667vw]">
             <input name="tiktok" id="tiktok"
                 class="peer w-full h-full rounded-full outline outline-0 focus:outline-0 transition-all text-sm px-3 py-2.5"
                 placeholder=" ">
             <label
                 class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-focus:hidden peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 before:pointer-events-none before:transition-all after:block after:flex-grow after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 after:pointer-events-none peer-placeholder-shown:leading-[4.5] text-gray-500 peer-focus:text-gray-900  ">
                 Link tài khoản Tiktok *
             </label>
         </div>

         <div data-te-input-wrapper-init data-te-validate="input" data-te-validation-ruleset="isRequired"
             class="m-form relative w-full h-[8vw] lg:h-[4.166666666666667vw]">
             <input name="facebook" id="facebook"
                 class="peer w-full h-full rounded-full outline outline-0 focus:outline-0 transition-all text-sm px-3 py-2.5"
                 placeholder=" ">
             <label
                 class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-focus:hidden peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 before:pointer-events-none before:transition-all after:block after:flex-grow after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 after:pointer-events-none peer-placeholder-shown:leading-[4.5] text-gray-500 peer-focus:text-gray-900  ">
                 Link tài khoản Facebook *
             </label>
         </div>





     </div>



     <div class="flex text-center w-100 mx-auto">
         <p id="result" class="result montserrat"></p>
     </div>
     <div class="flex text-center w-[25vw] lg:w-[12.5vw] mx-auto m-form">
         <div class="relative w-[25vw] lg:w-[12.5vw]">
             <img src="assets/img/xac_nhan.png" alt="xacnhan" class="hidden lg:block w-100 h-100 object-cover">
             <img src="assets/img/md/xac_nhan.png" alt="xacnhan" class="block lg:hidden w-100 h-100 object-cover">
             <button type="button" data-te-submit-btn-ref
                 class="w-[25vw] lg:w-[12.5vw] text-black absolute h-full top-0 bottom-0 left-0 right-0 flex items-center justify-center">

             </button>
         </div>

     </div>





     <div class="flex w-100 p-0 mt-12 lg:m-0 ">

         <p class="note montserrat">
             *Khi bạn đăng ký đồng hành cùng CKD Việt Nam, chúng tôi yêu cầu bạn cung cấp một số thông tin cá
             nhân.
             CKD Việt Nam cam kết không bán, cho thuê, hoặc chia sẻ thông tin cá nhân của bạn với bên thứ ba
             ngoại
             trừ các trường hợp pháp lý yêu cầu.
         </p>

     </div>
 </form>