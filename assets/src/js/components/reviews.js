export default function() {
    const reviewVideos = document.querySelectorAll('.review__video');
    reviewVideos && reviewVideos.forEach(reviewVideo => {
        reviewVideo.addEventListener('click', () => {
            reviewVideos.forEach(item => {
                if (item != reviewVideo) {
                    const video = item.querySelector('video');
                    item.classList.remove('active');
                    video.pause();
                }
            })

            const video = reviewVideo.querySelector('video');
            reviewVideo.classList.toggle('active');
            if (video.paused)
                video.play();
            else
                video.pause();
        })
    })
}
