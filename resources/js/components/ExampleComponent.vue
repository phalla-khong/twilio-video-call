<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-video-call">
                    <div class="card-header">Example Video Call</div>

                    <div class="card-body">
                        <div class="media-wraper">
                            <div id="remote-media-div"></div>
                            <div id="local-media-div"></div>
                        </div>
                        <input type="text" id="txt-token" />
                        <button type="button" id="video-preview">View Video</button>
                        <button type="button" id="join-room">Join Room</button>
                        <button type="button" id="leave-room">Leave Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // const { connect } = require('twilio-video');
    const { connect, createLocalTracks, createLocalVideoTrack, LocalVideoTrack, isSupported } = require('twilio-video');

    function createRoom() {
        if (isSupported) {
            console.log('create video room');

            document.getElementById('video-preview').onclick = function() {
                createLocalVideoTrack({
                    audio: false,
                    video: { width: 250 }
                }).then(track => {
                    const localMediaContainer = document.getElementById('local-media-div');
                    localMediaContainer.appendChild(track.attach());
                });
            };

            document.getElementById('join-room').onclick = function() {
                if(document.getElementById('txt-token').value != ''){
                    $TOKEN = document.getElementById('txt-token').value;
                }

                console.log('Token Room: '+ $TOKEN);
                console.log('Join Room: '+ $ROOM);

                // createLocalTracks({
                //     audio: true,
                //     video: { width: 640 }
                // }).then(localTracks => {
                //     return connect('$TOKEN', {
                //         name: 'my-room-name',
                //         tracks: localTracks
                //     });
                // }).then(room => {
                //     console.log(`Successfully joined a Room: ${room}`);
                //     room.on('participantConnected', participant => {
                //         console.log(`A remote Participant connected: ${participant}`);
                //     });
                // }, error => {
                //     console.error(`Unable to connect to Room: ${error.message}`);
                // });

                connect($TOKEN, {
                    name: $ROOM,
                    audio: true,
                    video: { width: 640 }
                }).then(room => {
                    console.log(`Successfully joined a Room: ${room}`);
                    // room.on('participantConnected', participant => {
                    //     console.log(`A remote Participant connected: ${participant}`);
                    // });

                    // Log your Client's LocalParticipant in the Room
                    const localParticipant = room.localParticipant;
                    console.log(`Connected to the Room as LocalParticipant "${localParticipant.identity}"`);

                    // Log any Participants already connected to the Room
                    room.participants.forEach(participant => {
                        console.log(`Participant "${participant.identity}" is connected to the Room`);

                        participant.tracks.forEach(publication => {
                            if (publication.track) {
                                document.getElementById('remote-media-div').appendChild(publication.track.attach());
                            }
                        });

                        participant.on('trackSubscribed', track => {
                            document.getElementById('remote-media-div').appendChild(track.attach());
                        });
                    });

                    // Log new Participants as they connect to the Room
                    room.once('participantConnected', participant => {
                        console.log(`Participant "${participant.identity}" has connected to the Room`);
                    });

                    // Log Participants as they disconnect from the Room
                    room.once('participantDisconnected', participant => {
                        console.log(`Participant "${participant.identity}" has disconnected from the Room`);
                    });

                    room.on('participantConnected', participant => {
                        console.log(`Participant connected: ${participant.identity}`);

                        // Attach the Participant's Media to a <div> element.
                        participant.tracks.forEach(publication => {
                            if (publication.isSubscribed) {
                                const track = publication.track;
                                document.getElementById('remote-media-div').appendChild(track.attach());
                            }
                        });

                        participant.on('trackSubscribed', track => {
                            document.getElementById('remote-media-div').appendChild(track.attach());
                        });
                    });

                    room.on('participantDisconnected', participant => {
                        console.log(`Participant disconnected: ${participant.identity}`);
                    });

                    room.on('disconnected', room => {
                        // Detach the local media elements
                        room.localParticipant.tracks.forEach(publication => {
                            const attachedElements = publication.track.detach();
                            attachedElements.forEach(element => element.remove());
                        });
                    });

                    document.getElementById('leave-room').onclick = function() {
                        room.disconnect();
                    };
                }, error => {
                    console.error(`Unable to connect to Room: ${error.message}`);
                });

                // joinRoom();
            };
        } else {
            console.error('This browser is not supported by twilio-video.js.');
        }
    }

    function joinRoom(){
        connect($TOKEN, {
            name:'my-new-room',
            audio: true,
            // maxAudioBitrate: 16000, /*For music remove this line*/
            video: { height: 480, frameRate: 24, width: 640 }
        })
        .then(room => {
            // console.log(`Successfully joined a Room: ${room}`);
            console.log(`Connected to Room: ${room.name}`);

            // Log your Client's LocalParticipant in the Room
            const localParticipant = room.localParticipant;
            console.log(`Connected to the Room as LocalParticipant "${localParticipant.identity}"`);

            // Log any Participants already connected to the Room
            room.participants.forEach(participant => {
                console.log(`Participant "${participant.identity}" is connected to the Room`);

                participant.tracks.forEach(publication => {
                    if (publication.track) {
                        document.getElementById('remote-media-div').appendChild(publication.track.attach());
                    }
                });

                participant.on('trackSubscribed', track => {
                    document.getElementById('remote-media-div').appendChild(track.attach());
                });
            });

            // Log new Participants as they connect to the Room
            room.once('participantConnected', participant => {
                console.log(`Participant "${participant.identity}" has connected to the Room`);
            });

            // Log Participants as they disconnect from the Room
            room.once('participantDisconnected', participant => {
                console.log(`Participant "${participant.identity}" has disconnected from the Room`);
            });

            // room.on('participantConnected', participant => {
            //     console.log(`A remote Participant connected: ${participant}`);
            // });

            room.on('participantConnected', participant => {
                console.log(`Participant connected: ${participant.identity}`);

                participant.tracks.forEach(publication => {
                    if (publication.isSubscribed) {
                        const track = publication.track;
                        document.getElementById('remote-media-div').appendChild(track.attach());
                    }
                });

                participant.on('trackSubscribed', track => {
                    console.log('is Subscribed');
                    document.getElementById('remote-media-div').appendChild(track.attach());
                });
            });

            room.on('participantDisconnected', participant => {
                console.log(`Participant disconnected: ${participant.identity}`);
            });

        }, error => {
            console.error(`Unable to connect to Room: ${error.message}`);
        });
    }

    export default {
        mounted() {
            console.log('Component mounted.');
            createRoom();
        }
    }
</script>
