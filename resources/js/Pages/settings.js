import { createClient, createMicrophoneAndCameraTracks } from "agora-rtc-react";

const appId = import.meta.env.VITE_AGORA_API;
const token =null;

export const config = { mode: "rtc", codec: "vp9", appId: appId, token: token };
export const useClient = createClient(config);
export const useMicrophoneAndCameraTracks = createMicrophoneAndCameraTracks();
export const channelName = "test";
