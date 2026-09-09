     	$(document).ready(function() {
     		const searchInput = $('#gallerySearch');
     		const filterButtons = $('.gallery-filter-btn');
     		const galleryItems = $('.gallery-item');
     		const noResult = $('#galleryNoResult');
     		let activeFilter = 'all';

     		function filterGallery() {
     			const keyword = searchInput.val().toLowerCase()     				.trim();
     			let visible = 0;
     			galleryItems.each(function() {

     				const item = $(this);
     				const category = item.data('category');
     				const title = item.data('title');
     				const matchCategory = activeFilter === 'all' ||
     					category === activeFilter;
     				const matchSearch =	keyword === '' ||
     					title.includes(keyword);

     				if (matchCategory && matchSearch) {
     					item.removeClass('gallery-hidden');
     					visible++;
     				} else {
     					item.addClass('gallery-hidden');
     				}
     			});

     			if (visible === 0) {
     				noResult.removeClass('d-none');
     			} else {

					noResult.addClass('d-none');
     			}

     		}

     		searchInput.on('keyup', function() {
     			filterGallery();
     		});

     		filterButtons.on('click', function() {
     			filterButtons.removeClass('active');
     			$(this).addClass('active');
     			activeFilter =	$(this).data('filter');
     			filterGallery();
     		});
     	});
     