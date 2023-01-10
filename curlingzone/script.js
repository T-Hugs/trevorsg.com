const breakpoints = Object.entries({
    xl: 1280,
    lg: 1024,
    md: 768,
    sm: 640,
}).sort((a, b) => {
    return b[1] - a[1];
});

function init() {
    const nav = document.getElementById("nav");
    const navBarButton = document.getElementById("navBarButton");

    navBarButton.addEventListener("click", (e) => {
        toggleNav(e.currentTarget);
    });
    positionContentBoxes();
}
const navPopupClasses = [
    "absolute",
    "flex-col",
    "bg-primary-100",
    "p-4",
    "shadow",
    "rounded",
    "border-primary-400",
    "border-2",
];
function toggleNav(anchor, show) {
    const nav = document.getElementById("nav");

    if (show !== false && getComputedStyle(nav).display === "none") {
        nav.classList.remove("hidden");
        nav.classList.add(...navPopupClasses);
        nav.style.top = anchor.offsetTop + "px";
        nav.style.right = anchor.clientWidth + 8 + "px";
    } else {
        nav.classList.add("hidden");
        nav.classList.remove(...navPopupClasses);
    }
}

function findContentBoxes() {
    const boxes = document.querySelectorAll(".cb");
    const arr = [...boxes].sort((a, b) => {
        return Number(a.dataset.contentBoxId) - Number(b.dataset.contentBoxId);
    });
    return arr;
}

function getCurrentBreakpoint() {
    const screenWidth = window.innerWidth;
    for (const [bpName, value] of breakpoints) {
        if (screenWidth >= value) {
            return bpName;
        }
    }
    return "sm";
}

function positionContentBoxes() {
    const currentBp = getCurrentBreakpoint();
    const leftCol = document.getElementById("leftCol");
    const centerCol = document.getElementById("centerCol");
    const rightCol = document.getElementById("rightCol");
    const contentBoxes = findContentBoxes();
    const featuredBoxes = contentBoxes.filter((b) => b.classList.contains("feature"));
    const nonFeaturedBoxes = contentBoxes.filter((b) => !b.classList.contains("feature"));
    for (const featuredBox of featuredBoxes) {
        centerCol.append(featuredBox);
    }
    if (currentBp === "sm") {
        for (const box of nonFeaturedBoxes) {
            centerCol.append(box);
        }
    } else if (currentBp === "md" || currentBp === "lg") {
        for (const box of nonFeaturedBoxes) {
            leftCol.append(box);
        }
    } else {
        const leftCount = Math.floor(nonFeaturedBoxes.length / 2);
        const rightCount = Math.ceil(nonFeaturedBoxes.length / 2);

        for (let i = 0; i < leftCount; ++i) {
            leftCol.append(nonFeaturedBoxes.shift());
        }
        for (let i = 0; i < rightCount; ++i) {
            rightCol.append(nonFeaturedBoxes.shift());
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    init();
});

document.addEventListener("keydown", (e) => {
    if (!e.defaultPrevented && e.key === "Escape") {
        toggleNav(undefined, false);
    }
});

window.addEventListener("resize", () => {
    toggleNav(undefined, false);
    positionContentBoxes();
});
