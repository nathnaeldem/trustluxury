(() => {
  const nav = document.getElementById("siteNav");

  const onScroll = () => {
    if (!nav) return;
    nav.classList.toggle("is-scrolled", window.scrollY > 40);
  };

  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  const reveals = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    reveals.forEach((el) => io.observe(el));
  } else {
    reveals.forEach((el) => el.classList.add("is-visible"));
  }

  /* ——— Partners horizontal marquee ——— */
  const initPartnersMarquee = () => {
    const track = document.getElementById("partnersTrack");
    const viewport = document.querySelector(".partners-marquee__viewport");
    if (!track || !viewport) return;

    const baseCount = track.children.length;
    if (!baseCount) return;

    const cloneSet = () => {
      for (let i = 0; i < baseCount; i += 1) {
        track.appendChild(track.children[i].cloneNode(true));
      }
    };

    cloneSet();

    /* Cap clones so we never infinite-loop if layout is wrong */
    let guards = 0;
    while (track.scrollWidth < Math.max(viewport.clientWidth, 320) * 2 && guards < 6) {
      const before = track.scrollWidth;
      cloneSet();
      guards += 1;
      if (track.scrollWidth <= before + 1) break;
    }

    const sets = Math.max(track.children.length / baseCount, 2);
    let offset = 0;
    let paused = false;
    const speed = 0.7;

    const tick = () => {
      if (!paused) {
        offset += speed;
        const cycle = track.scrollWidth / sets;
        if (cycle > 0 && offset >= cycle) offset -= cycle;
        track.style.transform = "translate3d(" + -offset.toFixed(2) + "px,0,0)";
      }
      window.requestAnimationFrame(tick);
    };

    viewport.addEventListener("mouseenter", () => { paused = true; });
    viewport.addEventListener("mouseleave", () => { paused = false; });
    viewport.addEventListener("touchstart", () => { paused = true; }, { passive: true });
    viewport.addEventListener("touchend", () => { paused = false; }, { passive: true });

    window.requestAnimationFrame(tick);
  };

  initPartnersMarquee();

  /* ——— Hero video autoplay ——— */
  const video = document.getElementById("heroVideo") || document.querySelector(".hero-video__media video");
  if (video) {
    video.muted = true;
    video.defaultMuted = true;
    video.playsInline = true;
    video.setAttribute("muted", "");
    video.setAttribute("playsinline", "");
    video.setAttribute("webkit-playsinline", "");
    video.preload = "auto";

    let playing = false;

    const tryPlay = () => {
      if (playing && !video.paused) return;
      video.muted = true;
      const p = video.play();
      if (p && typeof p.then === "function") {
        p.then(() => {
          playing = true;
          video.classList.add("is-playing");
        }).catch(() => {});
      }
    };

    ["loadedmetadata", "loadeddata", "canplay", "canplaythrough"].forEach((evt) => {
      video.addEventListener(evt, tryPlay);
    });

    if (video.readyState >= 2) tryPlay();
    tryPlay();

    ["touchstart", "touchend", "scroll", "click", "pointerdown"].forEach((evt) => {
      document.addEventListener(evt, tryPlay, { passive: true });
    });

    document.addEventListener("visibilitychange", () => {
      if (!document.hidden) tryPlay();
    });

    let attempts = 0;
    const kick = window.setInterval(() => {
      attempts += 1;
      tryPlay();
      if (playing || attempts > 25) window.clearInterval(kick);
    }, 400);
  }
})();
