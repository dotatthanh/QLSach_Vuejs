// new Vue({
//     el: "#book",
//     data: function () {
//         return {
//             author: 'Phạm Đăng Thắng',
//             city: [
//                 { address: 'Hà Nội', image: 'https://images.unsplash.com/photo-1427830574887-32e5702033b0' },
//                 { address: 'Huế', image: 'https://images.unsplash.com/photo-1427830228531-ccf2652188b7' },
//                 { address: 'Đà Nẵng', image: 'https://images.unsplash.com/photo-1450885413713-176921f199b2' },
//             ],
//             posts: [],
//             user: {
//                 name: '',
//                 email: '',
//                 phone: ''
//             }
//         }
//     },
//     created: function () {
//         this.showBook()
//     },
//     methods: {
//         showBook: function () {
//             let scop = this;
//             return axios.get('http://127.0.0.1:8000/books')
//                 .then(function (response) {
//                     scop.posts = response.data
//                 })
//                 .catch (function (err) {
//                     console.log(err)
//                 })
//         },
//     }
// });