import { createClient, createMicrophoneAndCameraTracks } from "agora-rtc-react";

const appId = "b96625993ad144d7a032726963bd50d9";
const token =null;

export const config = { mode: "rtc", codec: "vp9", appId: appId, token: token };
export const useClient = createClient(config);
export const useMicrophoneAndCameraTracks = createMicrophoneAndCameraTracks();
export const channelName = "test";
