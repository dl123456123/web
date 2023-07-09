<?php
$title = 'Kho Nick Free Fire';
?>
<section id="main" >				
				
		<br>		
<div>
    
    <div class="w-full max-w-6xl mx-auto v-layout-item text-gray-800 py-4 md:py-12 px-4 md:px-2" style="background: #345;color: #fff;padding: 5px;border-radius:11px">
    <div class="md:ml-0 mb-4 w-full text-center inline-block uppercase py-1 text-gray-800 md:text-3xl text-2xl font-extrabold">
       <b style="color: #fff;padding: 5px;border-radius:11px"> Kho Nick Free Fire</b> </div>
            <div class="alert-info block2" role="alert " >
                                                            </div>
                            
                            <div class="v-text-1 mb-4 ">
                               <div class="grid grid-cols-8 gap-2 md:gap-6">
                                    <input value="21" name="id" type="hidden">
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Mã
                                                số</span></div>
                                        <div class="flex items-center relative w-full">
                                            <input type="number" name="id" id="id" onchange="fitler_account()" placeholder="Ví dụ: 123421"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Giá
                                                từ</span></div>
                                        <div class="flex items-center relative w-full">
                                            <select name="sapxep" id="sapxep" onchange="fitler_account()"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                                <option value="">Sắp xếp</option>
                                            <option value="1" >Giá từ thấp tới cao</option>
                                            <option value="2" >Giá từ cao tới thấp</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Giá
                                                từ</span></div>
                                        <div class="flex items-center relative w-full">
                                            <select name="price" id="price" onchange="fitler_account()"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                                <option value="0">Tìm theo giá</option>
                                            <option value="1">100,000 trở xuống</option>
                                            <option value="2">100,000 - 400,000</option>
                                            <option value="3">400,000 - 800,000</option>
                                            <option value="4">800,000 - 1,000,000</option>
                                            <option value="5">1,000,000 trở lên</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex items-center">
                                       
                                    <button type="submit"
                                                class="mr-1 bg-green-600 text-white w-full rounded-none font-bold py-2 px-4 rounded focus:outline-none" onclick="fitler_account()">
                                                Tìm Kiếm
                                            </button>
                                            <button type="submit"
                                                class="mr-1 bg-red-600 text-white w-full rounded-none font-bold py-2 px-4 rounded focus:outline-none" onclick="clear_fitler()">
                                                Tất cả
                                            </button>
</div>
                                  
                               </div>
                            </div>
                            <div class="my-2"></div>
        <div class="my-2"></div>
        <div class="my-6 v-item-account" >
         
            <div class="list_account"></div>
                                    <!-- co cc -->
			        
				   </div>
    </div>
</div>
<script>
    page = 1;
    id = "";
	price = "";
	sapxep = "";
	
    function load_account() {
      
        $(".list_account").html('Đang Xử Lý...');
        $.ajax({
        type: "POST",
        url: '/TAD_SYSTEM/Model/Ajax/Search.php',
        data: {
            
			
            page: page, id: id, price: price, sapxep: sapxep
        },
		
        success: function(datanick)
        {
            $(".list_account").html('22222222');
                $('.list_account').empty().append(datanick);
                $(".list_account").show();
        }
    });
      
    }
    function clear_fitler() {
        page = 1;
        id = price = sapxep = "";
        $("#id, #price", "#sapxep").val('0');
        load_account();
    }
    function fitler_account() {
        id = $("#id").val();
		price = $("#price").val();
		sapxep = $("#sapxep").val();
        load_account();
    }
    load_account();
</script><br><br>