import { Link } from "react-router-dom";
import downArrow from "../../assets/down-arrow.png";

function LanguageSelector() {
  return (
    <div className="dropdown dropdown-bottom">
      <div
        tabIndex={0}
        role="button"
        className="flex items-center justify-between gap-2 p-2 m-1 text-white border rounded-md border-gold w-28"
      >
        اللغة العربية
        <img src={downArrow} className="w-4 h-4 invert" />
      </div>
      <ul
        tabIndex={0}
        className="dropdown-content z-[99] menu p-2 shadow bg-white rounded-md w-28"
      >
        <Link
          to={"/en-us"}
          className="flex items-center gap-2 p-2 rounded-md hover:bg-gray-100"
        >
          English
        </Link>
        <hr className="text-gold bg-gold border-gold" />
        <Link
          to={"/en-us"}
          className="flex items-center gap-2 p-2 rounded-md hover:bg-gray-100"
        >
          {" "}
          עברית
        </Link>
      </ul>
    </div>
  );
}

export default LanguageSelector;
