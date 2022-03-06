  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBVgEDM4dtH6Y9h5xaXv89GScdw4ik7R48",
    authDomain: "shriramsetu-app.firebaseapp.com",
    projectId: "shriramsetu-app",
    storageBucket: "shriramsetu-app.appspot.com",
    messagingSenderId: "954148524490",
    appId: "1:954148524490:web:d891d39497bc11b7ccff33",
    measurementId: "G-TE1TPBE1J6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
