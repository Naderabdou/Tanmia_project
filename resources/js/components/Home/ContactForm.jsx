import React from "react";

function ContactForm() {
  return (
    <form className="p-4 border-2 rounded-lg border-gold md:m-4 ">
      <h3 className="p-4 mx-auto text-2xl font-extrabold text-center border-b border-gold w-fit">
        يمكنك ترك رسالة هنا
      </h3>
      <div className="gap-2 p-2 text-xl md:grid">
        <label htmlFor="contactName">الاسم</label>
        <input
          id="contactName"
          className="w-full p-1 px-2 border border-black rounded-md focus:outline-none"
        ></input>
      </div>
      <div className="gap-2 p-2 text-xl md:grid">
        <label htmlFor="contactEmail">البريد الإلكتروني</label>
        <input
          id="contactEmail"
          className="w-full p-1 px-2 border border-black rounded-md focus:outline-none"
        ></input>
      </div>
      <div className="gap-2 p-2 text-xl md:grid">
        <label htmlFor="contactMsg">الرسالة</label>
        <textarea
          id="contactMsg"
          className="w-full p-1 px-2 border border-black rounded-md focus:outline-none"
        ></textarea>
      </div>
      <input
        type="submit"
        value="أرسل الرسالة"
        className="block p-2 px-5 mx-auto text-2xl border rounded-md cursor-pointer border-gold hover:bg-orange-500 hover:text-white"
      />
    </form>
  );
}

export default ContactForm;
