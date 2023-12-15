import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import "./index.css";
import "./assets/css/tailwind.css";

import Manager from "./components/pages/Manager";
import Begin from "./components/pages/Begin";
import Strategy from "./components/pages/strategy";
import Organizers from "./components/pages/Organizers";
import Contact from "./components/pages/Contact";
import About from "./components/pages/About";
import Operationals from "./components/pages/Operationals";
import Programs from "./components/pages/Programs";
import Program from "./components/pages/Program";
import EnVersion from "./components/pages/EnVersion";
import Report from "./components/pages/Report";
import Header from "./components/general/Header";
import NewsList from "./components/pages/News";
import NotFound from "./components/pages/NotFound";
import VideosPage from "./components/pages/VideosPage";
const router = createBrowserRouter([
  {
    path: "/",
    element: <Header />,
    children: [
      {
        index: true,
        element: <App />,
      },
      { path: "/news", element: <NewsList /> },
      { path: "/news/:id", element: <Report /> },
      {
        path: "/about",
        element: <About />,
      },
      { path: "/about/:id", element: <About /> },
      { path: "/programs", element: <Programs /> },
      { path: "/programs/:id", element: <Program /> },
      { path: "/operationals", element: <Operationals /> },
      { path: "/operationals/:id", element: <Operationals /> },

      { path: "/operationals", element: <Operationals /> },
      { path: "/operationals/:id", element: <Operationals /> },
      { path: "/videos", element: <VideosPage /> },
      { path: "/en-us", element: <EnVersion /> },
    ],
  },
  {
    path: "*",
    element: <NotFound />,
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);
