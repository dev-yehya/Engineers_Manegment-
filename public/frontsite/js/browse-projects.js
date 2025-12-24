// Select all the boxes
const boxes = document.querySelectorAll('.imgs-container .box');
// Add a click event to each box
boxes.forEach((box) => {
    box.addEventListener('click', () => {
        // Redirect to the product page
        window.location.href = "{{route('product')}}";
    });
});
