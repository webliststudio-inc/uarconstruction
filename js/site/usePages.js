/// Fetch Page List ///
function _getPageList(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
		pageContainer = '',
		projectStageId = '',
		categoryId = '',
		projectCategoryId = ''
    } = options;
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}&limit=${limit||''}&projectStageId=${projectStageId||''}&categoryId=${categoryId||''}&projectCategoryId=${projectCategoryId||''}`,
		})
		.then((response) => {
			_pageListDisplay(response?.data, pageContainer);
		 })
		 .catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: pageContainer,
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: pageContainer,
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Display Page List ////
function _pageListDisplay(data, pageContainer) {
    if (pageContainer=='indexServicePageContent' || pageContainer=='allServicePageContent') {
	    _indexServicesData(data, pageContainer);
	}
	if (pageContainer=='relatedServicesCont') {
	    _pageRelatedServicesData(data, pageContainer);
    }
    if (pageContainer=='indexPortfolioListContainer') {
	    _indexPortfolioData(data, pageContainer);   
	}
	if (pageContainer=='indexRightPortfolioListContainer') {
	    _indexRightPortfolioData(data, pageContainer);   
	}
	if (pageContainer=='relatedPagePortfolioContent') {
	    _pageRelatedPortfolioData(data, pageContainer);   
	}
	if (pageContainer=='indexBlogPageContainer' || pageContainer=='allRelatedBlogPageContainer') {
	    _indexBlogData(data, pageContainer);   
	}
	if (pageContainer=='pageMainBlogPageContainer') {
	    _pageMainBlogData(data, pageContainer);   
	}
	if (pageContainer=='relatedPageBlogContent') {
	    _pageRelatedBlogData(data, pageContainer);   
	}
	if (pageContainer=='completedProjectContainer' || pageContainer=='ongoingProjectContainer' || pageContainer=='upcomingProjectContainer' || pageContainer=='allProjectContainer') {
	    _pageCompletedProjectData(data, pageContainer);   
	}
	if (pageContainer=='footerServiceList') {
	    _footerServicesListData(data, pageContainer);   
	}
}

/// Initialize Fetch Service List ///
function _indexServicesData(data, pageContainer) {
	const content = data.map((item) => {
    return `
      	<div class="service-div" data-aos="fade-up" data-aos-duration="1200">
            <div class="image-div">
                <img src="${servicePixPath}/${item.seoFlyer}" alt="${item.title}" />
            </div>
            <div class="icon-div">
                <img src="${websiteUrl}/all-images/images/icon.png"
                    alt="${item.title} Icon" />
            </div>
                <a href="${websiteUrl}/services/${item.pageUrl}">
            <div class="text-div">
                <h3>${item.pageTitle}</h3>
                <p>${item?.seoDescription.substring(0, 129)}
					${item?.seoDescription.length > 129 ? '...' : ''}
				</p>
                    
                <button class="btn">Read More <i class="bi bi-arrow-right-short"></i></button>
            </div></a>
        </div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Page Related Service List ///
function _pageRelatedServicesData(data, pageContainer) {
	const content = data.map((item) => {
	return `
	<a href="${websiteUrl}/services/${item.pageUrl}">
      	<div class="services-cont">
			<div class="icon">
				<i class="bi bi-check2-circle"></i>
			</div>
			<div class="content">
				<h4 title="${item.pageTitle}">${item.pageTitle}</h4>  
			</div>
		</div>
	</a>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

//// Display Left Index Portfolio List ////
function _indexPortfolioData(data, pageContainer = "indexPortfolioListContainer") {
	// Convert single object to array
	data = Array.isArray(data) ? data : [data];

	const content = data.map((item) => {
		const projectStageName = item.projectStageData?.projectStageName?.toLowerCase().trim().replace(/\s+/g, '-') ?? '';
    return `
      	<div class="project-div" data-aos="fade-in" data-aos-duration="800">
			<div class="title ${item.projectStageData?.projectStageName}">${item.projectStageData?.projectStageName}</div>
			<div class="img-div">
					<img src="${portfolioPixPath}/${item.seoFlyer}" alt="${item.pageTitle}" />
			</div>

			<div class="text-div">
				<div class="div-in">
					<h2>${item.pageTitle}</h2>
					<p>
						${item?.seoDescription.substring(0, 200)}
						${item?.seoDescription.length > 200 ? '...' : ''}
					</p>
					<a href="${websiteUrl}/portfolio/${projectStageName}/${item.pageUrl}">
						<button class="btn" title="${item.pageTitle}">READ MORE <i class="bi bi-arrow-right-short"></i></button></a>
				</div>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

//// Display Right Index Portfolio List ////
function _indexRightPortfolioData(data, pageContainer) {
	sessionStorage.setItem('rightPortfolioData', JSON.stringify(data));
	const content = data.map((item, index) => {
    return `
      	<div class="project-image" onclick="_showPortfolio(${index})">
			<div class="img-div">
				<img src="${portfolioPixPath}/${item.seoFlyer}"
				alt="${item.pageTitle}" />
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

//// Show Selected Portfolio ////
function _showPortfolio(index) {
	const data = JSON.parse(sessionStorage.getItem("rightPortfolioData")) || [];
	_indexPortfolioData(data[index]);
}

/// Initialize Fetch Page Related Portfolio List ///
function _pageRelatedPortfolioData(data, pageContainer) {
	const content = data.map((item) => {
	const projectStageName = item.projectStageData?.projectStageName?.toLowerCase().trim().replace(/\s+/g, '-') ?? '';
	return `
	<a href="${websiteUrl}/portfolio/${projectStageName}/${item.pageUrl}">
		<div class="related-post">
			<div class="image-div">
				<img src="${portfolioPixPath}/${item.seoFlyer}"
				alt="${item.pageTitle}" />
			</div>
			<div class="cont-div">
				<h3>${item.pageTitle}</h3>
				<div class="comment">
					<i class="bi-clock"></i> 
					<span>${_fetchFormatDate(item.updatedTime)}</span>
				</div>
			</div>
		</div>
	</a>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Index Blog List ///
function _indexBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
	<div class="blog-div">
		<div class="blog-inner-div">
			<div class="image-div">
				<img src="${blogPixPath}/${item.seoFlyer}"
				alt="${item.pageTitle}" />
			</div>

			<div class="text-div">
				<div class="count">
					<i class="bi-calendar3"></i> ${_fetchFormatDate(item.updatedTime)}
					<span>|</span>
					<i class="bi-eye-fill"></i> ${item.viewCount} VIEWS
				</div>

				<h3>${item.pageTitle}</h3>
				<p>
					${item?.seoDescription.substring(0, 80)}
					${item?.seoDescription.length > 80 ? '...' : ''}
				</p>

				<a href="${websiteUrl}/blog/${item.pageUrl}">
					<button class="btn" title="${item.pageTitle}">  
						Read More <i class="bi-arrow-right"></i>
					</button>
				</a>
			</div>
		</div>
	</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Main Blog List ///
function _pageMainBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
	<a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
		<div class="main-blog-div">
			<div class="top-text">${item.categoryData?.categoryName}</div>
			<div class="image-div">
				<img src="${blogPixPath}/${item.seoFlyer}"
				alt="${item.pageTitle}" />
			</div>
			<div class="text-content-div">
				<h2>${item.pageTitle}</h2>
				<div class="count">
					<i class="bi-calendar3"></i> ${_fetchFormatDate(item.updatedTime)}
					<span> | </span>
					<i class="bi-eye"></i> ${item.viewCount} VIEWS
				</div>
				<p>
					${item.seoDescription}
				</p>
				<div>
					<button class="btn" title="Read More">
						Read More <i class="bi-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>
	</a>`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Related Blog List ///
function _pageRelatedBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
		<a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
			<div class="related-post">
				<div class="image-div">
					<img src="${blogPixPath}/${item.seoFlyer}"
					alt="${item.pageTitle}" />
				</div>
				<div class="cont-div">
					<h3>${item.pageTitle}</h3>
					<div class="comment">
						<i class="bi-clock"></i> 
						<span>${_fetchFormatDate(item.updatedTime)}</span>
					</div>
				</div>
			</div>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Completed Project List ///
function _pageCompletedProjectData(data, pageContainer) {
	const content = data.map((item) => {
		const projectStageName = item.projectStageData?.projectStageName?.toLowerCase().trim().replace(/\s+/g, '-') ?? '';
	return `
		<a href="${websiteUrl}/portfolio/${projectStageName}/${item.pageUrl}">
			<div class="portfolio-card" data-category="1">
				<div class="title ${item.projectStageData?.projectStageName}">${item.projectStageData?.projectStageName}</div>
				<div class="image-div">
					<img src="${portfolioPixPath}/${item.seoFlyer}"
							alt="${item.pageTitle}" />
				</div>
				<div class="card-content">
					<h3 class="card-title" title="${item.pageTitle}">${item.pageTitle}</h3>
					<div class="portfolio-meta">
						<div class="porfolio-type"><span>${item.projectCategoryData?.projectCategoryName}</span></div>
						<div class="location"><i class="bi bi-geo-alt"></i> <span>${item.location}</span></div>
					</div>
				</div>
			</div>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Footer Services List ///
function _footerServicesListData(data, pageContainer) {
	const content = data.map((item) => {
	return `
		<a href="${websiteUrl}/services/${item.pageUrl}" title="${item.pageTitle}">
			<li>${item.pageTitle}</li>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Fetch Each Page Details ///
function _getEachPageDetails(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
    } = options;
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}&limit=${limit||''}`,
		})
		.then((response) => {
			const data = response?.data[0];
			const pageTitle = data.pageTitle;
			const seoDescription = data.seoDescription;
			const pageContent = data.pageContent;
			const seoFlyer = data.seoFlyer;
			const updatedTime = data.updatedTime;
			const viewCount = data.viewCount;
			const createdByName =
			data.createdByData?.fullname ??
			data.updatedByData?.fullname ??'';

			const createdByEmail =
			data.createdByData?.emailAddress ??
			data.updatedByData?.emailAddress ?? '';

			let pixPath = '';
			if (pageCategory=='PORTFOLIO') {
				pixPath = portfolioPixPath;
			} else if (pageCategory=='SERVICE') {
				pixPath = servicePixPath;
			} else if (pageCategory=='BLOG') {
				pixPath = blogPixPath;
			}

			$('#pageTitle').html(pageTitle);
			$('#seoDescription').html(seoDescription);
			$('#pageContent').html(pageContent);
			$('#createdByName').html(createdByName);
			$('#createdByEmail').html(createdByEmail);
			$('#updatedTime').html(_fetchFormatDate(updatedTime));
			$('#viewCount').html(viewCount);
			$('#seoFlyer').attr('src', (pixPath) + '/' + seoFlyer);
			updateReadingTime();
			
			const picturesArray = data?.pagePicturesData ?? [];
			let pixHtml = '';

			for (let item of picturesArray) {
				pixHtml += `
					<div class="each-img-div" title="Click to Preview" id="img${item.sn}"
						onclick="_viewPreviewImage('img${item.sn}', 'pagesPreviewPix')">
						<img src="${pagesPixPath}/${item.pagePix}"
						alt="${pageTitle}" />
					</div>
				`;
			}
			$('#fetchPagePictures').html(pixHtml);
			if (picturesArray.length>0) {
				$('.bottom-img-div').show();
				_slideImages();
			} else {
				$(".bottom-img-div").hide();
			}
		})
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_actionAlert("Check your internet connection and try again", false);
			} else {
				_actionAlert(error.message, false);
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Filter Pages Data ////
function _filtersPages(value, pageContainer, container) {
    value = value.trim().toLowerCase();
    const $container = $(`#${pageContainer}`);
    // Cache the original HTML once
    if (!$container.data('originalHtml')) {
        $container.data('originalHtml', $container.html());
    }
    // Restore the original content when search is cleared
    if (value === '') {
        $container.html($container.data('originalHtml'));
        return;
    }
    let visibleCount = 0;
    $container.find(`.${container}`).each(function () {
        const text = $(this).text().toLowerCase();
        if (text.includes(value)) {
            $(this).show();
            visibleCount++;
        } else {
            $(this).hide();
        }
    });
    if (visibleCount === 0) {
        _showEmptyState({
            container: pageContainer,
            message: "No Record found!!!",
        });
    }
}

//// Filter Pages Data ////
function _filtersBlog(value) {
    value = value.trim().toLowerCase();
    const containers = [
        {
            container: 'pageMainBlogPageContainer',
            items: '.main-blog-div'
        },
        {
            container: 'allRelatedBlogPageContainer',
            items: '.blog-div'
        }
    ];

    containers.forEach(({ container, items }) => {
        const $container = $(`#${container}`);
        // Cache the original HTML only after the blog items have loaded
        if (
            !$container.data('originalHtml') &&
            $container.find(items).length > 0
        ) {
            $container.data('originalHtml', $container.html());
        }
        // Restore the original content when search is cleared
        if (value === '') {
            if ($container.data('originalHtml')) {
                $container.html($container.data('originalHtml'));
            }
            return;
        }
        let visibleCount = 0;
        // Filter items
        $container.find(items).each(function () {
            const text = $(this).text().toLowerCase();
            if (text.includes(value)) {
                $(this).show();
                visibleCount++;
            } else {
                $(this).hide();
            }
        });
        // Show empty state if no records found
        if (visibleCount === 0) {
            _showEmptyState({
                container: container,
                message: "No Record found!!!",
            });
        }
    });
}

/// Fetch Faq List ///
function _getFaqList(options) {
    const {
        pageContainer = "",
		limit = '',
		categoryId = ''
    } = options;
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-faq?limit=${limit}&categoryId=${categoryId||''}`,
		})
		.then((response) => {
			_faqListDisplay(response?.data, pageContainer);
		 })
		 .catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: pageContainer,
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: pageContainer,
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Display Faq List ////
function _faqListDisplay(data, pageContainer) {
    if (pageContainer=='indexFaqPageContent') {
	    _indexFaqData(data, pageContainer);
	}
	if (pageContainer=='faqPageContent') {
	    _faqData(data, pageContainer);
	}
}

/// Initialize Fetch Faq List ///
function _indexFaqData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-toggle" id="faq${index+1}">
			<div class="title-text" onclick="_collapse('faq${index+1}')">
				<div class="quest-text-div">
					<div class="icon-div"><i class="bi-question"></i></div>
					<h3>${item.faqQuestion}</h3>
				</div>
				<div class="expand-div" id="faq${index+1}num">
					<i class="bi bi-plus"></i>
				</div>
			</div>
			<div class="answer-div" id="faq${index+1}answer" style="display: none;">
				<p>${item.faqAnswer}</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Faq List ///
function _faqData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-title" id="faq${index+1}">
			<div class="inner-title-div" onclick="_collapse('faq${index+1}')">
				<h2>${item.faqQuestion}</h2>

				<div class="expand-div" id="faq${index+1}num">
					&nbsp;<i class="bi-plus"></i>&nbsp;
				</div>
			</div>
			<div class="faq-answer-div" id="faq${index+1}answer" style="display: none;">
				<p>
					${item.faqAnswer}
				</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Fetch Category List ///
function _fetchCategoryList(pageCategory, pageContainer) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-information-category`,
		})
		.then((response) => {
                let text = '';
                for (let i = 0; i < response.data.length; i++) {
                    const categoryId = response.data[i].categoryId;
                    const value = response.data[i].categoryName;
                    text += `<li title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}',  '', '${categoryId}', '');">${value}</li>`;
				}
        		$('#catId').html(text);
		 })
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: 'catId',
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: 'catId',
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

/// Fetch Project Category List ///
function _fetchProjectCategoryList(pageCategory, pageContainer, projectStageId) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-project-category`,
		})
		.then((response) => {
                let text = '';
                for (let i = 0; i < response.data.length; i++) {
                    const projectCategoryId = response.data[i].projectCategoryId;
                    const value = response.data[i].projectCategoryName;
                    text += `<li title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '${projectStageId}', '', '${projectCategoryId}');">${value}</li>`;
				}
        		$('#projectCategoryId').html(text);
		 })
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: 'projectCategoryId',
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: 'projectCategoryId',
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

/// Fetch Project Stage List ///
function _fetchProjectStageList(pageCategory, pageContainer) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-project-stages`,
		})
		.then((response) => {
                let text = '';
                for (let i = 0; i < response.data.length; i++) {
                    const projectStageId = response.data[i].projectStageId;
                    const value = response.data[i].projectStageName;
                    text += `<li title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '${projectStageId}', '', '');">${value}</li>`;
				}
        		$('#projectStageId').html(text);
		 })
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: 'projectStageId',
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: 'projectStageId',
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Fetch Tab Pages Data ///
function _fetchTabPagesData(pageCategory, pageContainers, projectStageId, categoryId, projectCategoryId) {
    pageContainers.split(',').forEach(function(pageContainer){
        pageContainer = pageContainer.trim();

        $(`#${pageContainer}`).html(`
            <div class="content-loading-div">
                <img src="${websiteUrl}/all-images/images/spinner.gif" alt="Loading" />
            </div>
        `);

        if (pageCategory == 'FAQ') {
            _getFaqList({
                pageContainer: pageContainer,
                categoryId: categoryId
            });
        } else {
            _getPageList({
                pageCategory: pageCategory,
                pageContainer: pageContainer,
                projectStageId: projectStageId,
                categoryId: categoryId,
                projectCategoryId: projectCategoryId
            });
        }
    });
}