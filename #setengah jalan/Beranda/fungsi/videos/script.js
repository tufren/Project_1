function openVideos() {
  $.ajax({
    URL: 'https://www.googleapis.com/youtube/v3/playlists',
    TYPE: 'GET',
    DATATYPE: 'JSON',
    DATA: {
      'KEY': 'AIzaSyDiGzjDOeKEbGxgtNMA3fXbRm1lbOIfaHM',
      'channelId': 'UCHHAT6E_M5v7Sd1hYkkPzGg',
      'part': 'snippet'
    },
    SUCCESS: (result) => {
      console.log(result)
    }
  })
}

$('#videos').on('click', function () {
  openVideos()
})