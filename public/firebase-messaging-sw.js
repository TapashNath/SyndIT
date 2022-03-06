//AIzaSyA5LiKOm7_hGoHvZezCDzPuewU9ZIMI5dE
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');


firebase.initializeApp({
    apiKey: "AIzaSyDljzprH9G6uMaYZmbvR25G7bqUwXUpj8I",
    authDomain: "syndit-2021.firebaseapp.com",
    projectId: "syndit-2021",
    storageBucket: "syndit-2021.appspot.com",
    messagingSenderId: "608052265999",
    appId: "1:608052265999:web:5a89d127e021f35ce34f7a",
    measurementId: "G-0XX2NSB708"
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload);

    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };

    return self.registration.showNotification(
        title,
        options,
    );
});
