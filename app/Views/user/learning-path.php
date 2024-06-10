<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Learning Path Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-20">
    <div class="flex flex-col sm:flex-row justify-between items-center w-full mx-auto text-3xl font-bold space-y-4 sm:space-y-0">
        <h1 class="w-full sm:w-auto text-center sm:text-left">Daftar Learning Path</h1>
        <div class="w-full sm:w-1/4">
            <label for="icon" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                    <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </div>
                <input type="text" id="searchInput" name="icon" class="py-2 px-4 ps-11 block w-full bg-transparent border-gray-300 shadow-sm rounded-lg text-sm text-gray-700 focus:z-10 focus:border-gray-900 focus:ring-gray-600 placeholder:text-gray-500 dark:border-neutral-700 dark:text-neutral-500 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Cari Learning Path" onkeyup="filterCards()">
            </div>
        </div>
    </div>
    <!-- Card Learning Path -->
    <div class="h-full mt-4 bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div id="cardContainer" class="p-4 md:p-6 grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Akuntansi">
                <img src="https://img.freepik.com/free-vector/money-income-attraction_74855-6573.jpg?t=st=1717938878~exp=1717942478~hmac=8dfa8f37cb5c38675655c3306f3cb77a53729a53c7dda74fbd003b20ba2a3659&w=900" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Akuntansi
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="IT">
                <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-sql-illustration_23-2149242071.jpg?t=st=1717954959~exp=1717958559~hmac=8d9b7748cf22a501d9eb1bd2ffdeac3bcfbff38efce62f2da9cf4b75ccabe90f&w=740" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                IT
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-vector/people-analyzing-growth-charts_23-2148866843.jpg?t=st=1717938991~exp=1717942591~hmac=88926764172001ec7b3326aa95860a134b2fd528b2c4df4ccf3578f2cde1101b&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Management
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-vector/online-job-interview-concept_23-2148626346.jpg?t=st=1717955021~exp=1717958621~hmac=164010cb186016d97a39b86c1e49b69444908e3b24949ac30bf50c6e44e5e8e9&w=740" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Human Resources
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-vector/warehouse-staff-wearing-uniform-loading-parcel-box-checking-product-from-warehouse-delivery-logistic-storage-truck-transportation-industry-delivery-logistic-business-delivery_1150-60909.jpg?t=st=1717955063~exp=1717958663~hmac=16b26af5442fa885b8a74a47173b1d09a88302c895b4efff926949242c9b34ba&w=1060" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Logistics
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-vector/business-operation-planning-software-technology-integration_335657-3131.jpg?t=st=1717955100~exp=1717958700~hmac=5e8b9aa2111d6b8c0d0d3cdc52b391bda22a9eaca331750b33221bddaf0a2931&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Operational
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- End Card Learning Path -->
</section>

<script>
    function filterCards() {
  var input, filter, cardContainer, cards, title, i;
  input = document.getElementById("searchInput");
  filter = input.value.toLowerCase();
  cardContainer = document.getElementById("cardContainer");
  cards = cardContainer.getElementsByTagName("a");

  for (i = 0; i < cards.length; i++) {
    title = cards[i].getAttribute("data-title");
    if (title.toLowerCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}
</script>

<?= $this->endSection() ?>