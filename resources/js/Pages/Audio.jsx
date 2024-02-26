import AudioPlayer from "react-h5-audio-player";
import "react-h5-audio-player/lib/styles.css";
import Navbar from "./Navbar";
import Footer from "./Footer";
import "./Audio.css";
import logo from "./assets/logo.png";
import { useNavigate } from "react-router-dom";
const Audio = () => {
    const navigate = useNavigate();
    const navigateToRooms = () => {
        navigate("/rooms");
    };
    return (
        <>
            <Navbar />
            <marquee>
                Dhagaystayaasha shararfta leh, waxaan ogaysiinaynaa,
                RadioFreeSom uu soo galay Hawadda, kalana socon kartid wararka
                Soomaaliya maalin kasta si toos ah. Waxaan kaloo, la dhiri
                galinaynaa, dhalin yarada ku howlan media, Maamulka Sare, ee
                RadioFreeSom uu ku wargelinayaan, in aay furayso Wadashaqeen
                toos ah ee Maalinle ah, Wariyahii diyaar in uu si toos ah ula
                shaqeeyo RadioFreeSom. warqad aad ku codsanaysid noola soo
                xiriir emailka radiofreesom@gmail.com
            </marquee>
            <div className="container-audio">
                <div style={{ width: "40%" }}>
                    <div className="logo">
                        <img src={logo} alt="" />
                        <b>radiofreesom.com</b>
                    </div>
                    <AudioPlayer
                        autoPlay={false}
                        src="https://stream-171.zeno.fm/08krves9z4zuv?zs=RFwfGiKgQeK0K6RZTcX7BA"
                        onPlay={(e) => console.log("onPlay")}
                        // other props here
                    />
                </div>
            </div>
            <i
                class="bi bi-caret-down-square-fill navigate-button"
                onClick={navigateToRooms}
            ></i>{" "}
            <Footer />
        </>
    );
};

export default Audio;
