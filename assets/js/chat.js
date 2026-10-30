(() => {
  const phone = "+1 (703) 868-1811";
  const phoneRaw = "17038681811";
  const email = "contact@trustluxurytransportation.com";

  const faqs = [
    {
      label: "Book a ride",
      color: "gold",
      reply:
        "Perfect — you can reserve online in under a minute. Tell us pickup, drop-off, and time, and our team confirms promptly.\n\nOr call us 24/7 at " +
        phone +
        ".",
      link: { href: "book.php", text: "Open booking form" },
    },
    {
      label: "Diplomatic transportation",
      color: "coral",
      reply:
        "Maximize your next delegation visit with seamless, secure diplomatic transportation tailored to protocol and timing.",
      link: { href: "book.php?service=" + encodeURIComponent("Diplomatic Transportation Services"), text: "Book diplomatic service" },
    },
    {
      label: "Meeting & Events",
      color: "gold",
      reply:
        "Move your group safely and comfortably with spacious luxury vehicles for corporate teams, families, or special occasions.",
      link: { href: "book.php?service=" + encodeURIComponent("Meeting & Events"), text: "Book for an event" },
    },
    {
      label: "Private aviation & airports",
      color: "teal",
      reply:
        "Stress-free pickups and drop-offs to DCA, IAD, and BWI with flight tracking — on time even with early arrivals or delays.",
      link: { href: "book.php?service=" + encodeURIComponent("Private Aviation & Airport Services"), text: "Book airport transfer" },
    },
    {
      label: "Leisure & entertainment",
      color: "coral",
      reply:
        "Enjoy comfortable travel between cities with private chauffeur-driven rides — ideal for personal journeys and entertainment plans.",
      link: { href: "book.php?service=" + encodeURIComponent("Leisure & Entertainment Travel"), text: "Book leisure travel" },
    },
    {
      label: "Corporate transportation",
      color: "gold",
      reply:
        "Designed for executives who demand timeliness, discretion, and a polished ride — ideal for meetings, client entertainment, and executive travel.",
      link: { href: "book.php?service=" + encodeURIComponent("Corporate Transportation Services"), text: "Book corporate service" },
    },
    {
      label: "Fleet options",
      color: "teal",
      reply:
        "Our fleet includes Luxury Sedans (2–3 pax), SUV Executive (6), Sprinter Vans (10–15), Stretch Limos (6–10), Mini Buses (20–30), and Motor Coaches (40–56).",
      link: { href: "fleet.php", text: "View full fleet" },
    },
    {
      label: "Service areas",
      color: "gold",
      reply:
        "We proudly serve Washington D.C., Maryland, and Northern Virginia — including McLean, Tysons, Arlington, Bethesda, and surrounding communities.",
      link: { href: "contact.php", text: "Contact us" },
    },
  ];

  const root = document.getElementById("concierge");
  const panel = document.getElementById("conciergePanel");
  const fab = document.getElementById("conciergeFab");
  const closeBtn = document.getElementById("conciergeClose");
  const messages = document.getElementById("conciergeMessages");
  const faqBox = document.getElementById("conciergeFaqs");

  if (!root || !panel || !fab || !messages || !faqBox) return;

  let openedOnce = false;

  const timeNow = () =>
    new Date().toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });

  const addBot = (text, link) => {
    const wrap = document.createElement("div");
    wrap.className = "concierge-bubble concierge-bubble--bot";
    const body = document.createElement("p");
    body.textContent = text;
    wrap.appendChild(body);
    if (link) {
      const a = document.createElement("a");
      a.href = link.href;
      a.className = "concierge-inline-link";
      a.textContent = link.text;
      wrap.appendChild(a);
    }
    const meta = document.createElement("time");
    meta.textContent = timeNow();
    wrap.appendChild(meta);
    messages.appendChild(wrap);
    messages.scrollTop = messages.scrollHeight;
  };

  const addUser = (text) => {
    const wrap = document.createElement("div");
    wrap.className = "concierge-bubble concierge-bubble--user";
    const body = document.createElement("p");
    body.textContent = text;
    wrap.appendChild(body);
    const meta = document.createElement("time");
    meta.textContent = timeNow();
    wrap.appendChild(meta);
    messages.appendChild(wrap);
    messages.scrollTop = messages.scrollHeight;
  };

  const showTyping = () => {
    const el = document.createElement("div");
    el.className = "concierge-typing";
    el.innerHTML = "<span></span><span></span><span></span>";
    messages.appendChild(el);
    messages.scrollTop = messages.scrollHeight;
    return el;
  };

  const renderFaqs = () => {
    faqBox.innerHTML = "";
    faqs.forEach((faq) => {
      const btn = document.createElement("button");
      btn.type = "button";
      btn.className = "concierge-pill concierge-pill--" + faq.color;
      btn.textContent = faq.label;
      btn.addEventListener("click", () => {
        addUser(faq.label);
        const typing = showTyping();
        window.setTimeout(() => {
          typing.remove();
          addBot(faq.reply, faq.link);
        }, 550 + Math.random() * 350);
      });
      faqBox.appendChild(btn);
    });

    const call = document.createElement("a");
    call.href = "tel:" + phoneRaw;
    call.className = "concierge-pill concierge-pill--call";
    call.innerHTML = '<i class="bi bi-telephone-fill"></i> Call ' + phone;
    faqBox.appendChild(call);

    const mail = document.createElement("a");
    mail.href = "mailto:" + email;
    mail.className = "concierge-pill concierge-pill--mail";
    mail.innerHTML = '<i class="bi bi-envelope-fill"></i> Email us';
    faqBox.appendChild(mail);
  };

  const open = () => {
    panel.hidden = false;
    root.classList.add("is-open");
    fab.setAttribute("aria-expanded", "true");
    fab.setAttribute("aria-label", "Close Trust Concierge");
    if (!openedOnce) {
      openedOnce = true;
      addBot("Welcome to Trust Luxury Transportation! How can we assist you today?");
      renderFaqs();
    }
  };

  const close = () => {
    panel.hidden = true;
    root.classList.remove("is-open");
    fab.setAttribute("aria-expanded", "false");
    fab.setAttribute("aria-label", "Open Trust Concierge");
  };

  fab.addEventListener("click", () => {
    if (root.classList.contains("is-open")) close();
    else open();
  });
  closeBtn.addEventListener("click", close);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && root.classList.contains("is-open")) close();
  });
})();
