const closeGalleryButton = document.getElementById('close_gallery_button');
// const overlay = document.getElementById('overlay');
const centeredGalleryTable = document.getElementById('centered_gallery_table');
const centeredGalleryTableHeader = document.getElementById('centered_gallery_table_header');
const centeredGalleryTableFooter = document.getElementById('centered_gallery_table_footer');

function toggleGallery() {
    console.log('toggle gallery');
    console.log(centeredGalleryTable, centeredGalleryTableHeader, centeredGalleryTableFooter);
    if(centeredGalleryTable.style.display === 'block') {
        centeredGalleryTable.style.display = 'none';
        centeredGalleryTableHeader.style.display = 'none';
        centeredGalleryTableFooter.style.display = 'none';
        overlay.style.display = 'none'; // hide overlay
    } else {
        overlay.style.display = 'block';
        centeredGalleryTable.style.display = 'block';
        centeredGalleryTableFooter.style.display = 'block';
        centeredGalleryTableHeader.style.display = 'block';
    }
}

closeGalleryButton.addEventListener('click', toggleGallery);

overlay.addEventListener('click', (event) => {
    event.stopPropagation();
});

document.addEventListener('click', event => {
    if(event.target.id === 'img_gallery')
        toggleGallery();
});

// interactive arrow in gallery window
document.addEventListener('DOMContentLoaded', () => {
    const galleryImg = document.getElementById('gallery_img');
    const galleryHeader = document.getElementById('gallery_header');
    const leftArrow = document.querySelector('.gallery_arr.left');
    const rightArrow = document.querySelector('.gallery_arr.right');

    let currentImageIndex = 0;
    let imageFilenames = [];

    fetch('get_image_names.php')
        .then(response => response.json())
        .then(data => {
            imageFilenames = data;
            updateGallery();
        })
        .catch(error => console.error('Error fetching image filenames:', error));

    function updateGallery() {
        const currentImage = imageFilenames[currentImageIndex];
        galleryImg.src = `../images/gallery/${currentImage}`;
        galleryHeader.innerHTML = `<h2>Gallery - ${currentImage}</h2>`;
    }

    function previous() {
        currentImageIndex = (currentImageIndex - 1 + imageFilenames.length) % imageFilenames.length;
        updateGallery();
    }

    function next() {
        currentImageIndex = (currentImageIndex + 1 + imageFilenames.length) % imageFilenames.length;
        updateGallery();
    }

    leftArrow.addEventListener('click', () => {
        previous();
    });

    rightArrow.addEventListener('click', () => {
        next();
    });

    document.addEventListener('keydown', (event) => {
        if(event.key === 'ArrowLeft') {
            previous();
        } else if(event.key === 'ArrowRight') {
            next();
        }
    })
})