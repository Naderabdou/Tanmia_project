import React from "react";
import food from "../../assets/food.jpg";
import MayInterestYou from "../News/MayInterestYou";

function Report() {
  return (
    <div className="grid gap-4">
      <img src={food} className="object-cover w-full max-h-80" />
      <h1 className="p-2 text-3xl border-b-2 border-gold w-fit">
        عنوان الخبر السعيد
      </h1>
      <h6 className="-mt-2 text-sm opacity-70">
        تم نشر الخبر في <span className="font-thin ">12 ديسمبر 2023</span>
      </h6>
      <p className="text-xl indent-4">
        أنشئت مُنظّمة "تَنمِية" كجمعية غير ربحية في عام 2023، ويقع مكتبها
        الرئيسي في قرية اكسال في الجليل، وتُعنى باقامة مشاريع لدعم التنمية
        الاقتصادية والاجتماعية للمجتمع العربي في الداخل، خاصة في مجال التشغيل
        ومحاربة البطالة، ودعم تخطّي العقبات التي تواجه نموّه وصولا الى تحسين
        مستوى وجودة حياة أبناء مجتمعنا. المحامي أحمد فاروق دراوشة يشغل منصب
        المدير العام لجمعية "تنمية"، وهو حاصل على اللقب الأول في الحقوق واللقب
        الثاني ادارة المنظّمات.
      </p>
      <div>
        <h2 className="mb-2 text-2xl font-bold border-b w-fit border-gold">
          أخبار قد تهمك:
        </h2>
        <div className="flex flex-wrap items-center justify-center gap-4">
          <MayInterestYou
            link={"news"}
            title={"اسم خبر سعيد اخر"}
            description={
              "تفاصيل كبيرة جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا عن خبر أخر"
            }
            id={1}
          />
          <MayInterestYou
            link={"news"}
            title={"اسم خبر سعيد اخر"}
            description={
              "تفاصيل كبيرة جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا عن خبر أخر"
            }
            id={2}
          />
          <MayInterestYou
            link={"news"}
            title={"اسم خبر سعيد اخر"}
            description={
              "تفاصيل كبيرة جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا عن خبر أخر"
            }
            id={3}
          />
          <MayInterestYou
            link={"news"}
            title={"اسم خبر سعيد اخر"}
            description={
              "تفاصيل كبيرة جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا جدا عن خبر أخر"
            }
            id={4}
          />
        </div>
      </div>
    </div>
  );
}

export default Report;
