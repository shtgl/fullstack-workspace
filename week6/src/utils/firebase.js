// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: process.env.FIREBASE,
  authDomain: "blog-208f1.firebaseapp.com",
  projectId: "blog-208f1",
  storageBucket: "blog-208f1.appspot.com",
  messagingSenderId: "623464146569",
  appId: "1:623464146569:web:a613fd825d6a2dacf40858"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);