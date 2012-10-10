#Teacher-Teacher Video Project

After pausing for a moment to enjoy the irony of teachers being resistant to professional development (i.e., learning), we can observe that "professional development", in many instances, turns into an unhelpful waste of time. It doesn't leave teachers feeling inspired, empowered, or with any sense of accomplishment.

I believe that a truly successful professional development program will need to do the following:
* be fun
* be productive in a very literal sense
* be empowering in the sense that real skills and comfort with new techniques are aquired throughout the process
* validate existing strengths as opposed to pummelling teachers with "best practices" they don't necessarily agree with or find useful
* treat teachers as the experts and allow them to soar to greater heights

The purpose of this document is to describe a system for engaging and exciting faculty about creating Khan-style videos in a collaborative fashion. I'm calling it the Teacher-Teacher Video Project. I full-heartedly believe we can get a wide range of faculty excited and energized to engage deeply in this project and enjoy it.

Producing a Khan-style video doesn't take much time. Minimal preparation is needed. There aren't any scripts. The goal of each video is pretty simple: teach the best you can. What makes this project "teacher-teacher" is the idea that the tutorial videos can adopt a teacher-student form factor with one teacher explaining concepts and the other playing the role of the learner. This would not be artificial. It would be genuine, which would mean teachers would work across departments most likely. For example, I'm interested in chemistry but don't have a strong background in it at all. I took no chemistry in college, and my high school class was sub-par. So, after school every once in a while, I could stop by and receive a one-on-one tutorial on a subject from an expert chemistry teacher. I would play the role of the learner asking engaged, intelligent questions and striving for true understanding. The video would be produced and could be used in place of a regular lecture to "flip" the classroom.

This would theoreticall provide a fun, enjoyable platform for teachers to engage in ideas about education and share their expertise, but it all hinges on structuring it right to build the right culture.

Also, the system would not mandate all videos be produced in this teacher-teacher form factor, but it would be encourage and perhaps incentivized with certain rewards in the system.

##The Desired Culture
As I said earlier, this needs to be something fun. People need to genuinely enjoy it. It cannot become a burden. It must feel useful. It must feel productive. It must be empowering and validating. People should feel good about their work. Okay, I think I've said enough...

Of course, getting all of this positivity to surround a project will not be easy. What we need to make sure we do is not have too much administrative involvement. Administration needs to support it, but it needs to be more grassroots. It needs to come from the teachers.

Participation must be completely voluntary. Its for teachers who enjoy it and believe in it.

###Step One: Meet Sal Khan
Building some initial excitement, we need to have faculty meet Sal Khan and here his philosophy on the power of on-demand YouTube videos. We need to hear well-articulated arguments for various forms of digital learning and understand the amazing impact they've had on our world already. They need to get the feeling that something special is going on here.

In my opinion, we've come to accept the current model of education despite its obvious flaws, which has been reasonable in the absence of a clear, compelling alternative. Well, for the first time in history, clear, compelling alternatives are emerging, and I hope that we can take note and get inspired by it.

This message may be lost on some. That's okay. For most teachers, I think, it will be highly thought-provoking and even inspiration, and that's enough to start. We only need a few people that are inpired enough to get things started. Others who are on board but unsure about the effort involved can wait. 

Also, we need to find ways to lessen the entry barrier. My initial thoughts are that we need a designated area where people can come, record, upload, and view their work in less than 25 minutes. It needs to be that easy, and I think we can make it that easy.

###Step Two: Learn Something
Try out some Khan Academy or Coursera as a learner. I have little patience for anyone who criticizes these systems without making a genuine attempt to use them to further their own learning--you can't judge a book by its cover. They make comments like, "Sure, YOU like learning this way, but it can't be good for everyone." I challenge all people thinking this way to keep an open mind and challenge themselves to learn something significant from Sal or a lecturer on Coursera. They need to put themselves in the position of a learner and simply try it out in depth.

The point I'm trying to make is that shared experience needs to be the starting point for discussion about digital learning. A discussion grounded in significant, concrete experience is a productive one. A discussion grounded in conjecture and vague understandings of new technology is a recipe for....well, something aweful.

Personally, I find these emerging platforms to be incredibly empowering on a personal level. The let me feel in control of my own learning experience, and at this point in my life, I can't ever imagine going back to college in the traditional system. With that said, there are things about a physical learning experience I miss, such as engaging in difficult problems with my peers. We need to thoroughly understand and evaluate the benefits and drawbacks of digital and physical learning.

Other people may find that they feel differently about digital learning--but I doubt it. That's fine if they do. I genuinely believe that my fellow teacher are in many was much smarter and wiser than I am. However, at the moment, my experience with the Khan Academy, Coursera, and other notable emerging learning patforms is much greater than most people's. As such, I may be in the best position to evaluate these new digital learning platforms. What we need is for other teachers to gain similar amounts of experience with these platforms so that they too can evaluate them. Their evaluations, after all, would quite likely more accurate and meaningful than mine.

###Step Three: Success Stories
We need success stories from teachers who have tried this system, enjoyed it, and seen real benefits in their classrooms. This will not come immediately, but when it does, others will get excited.

##Feedback and Goals
I was tempted to label this section "gamification," but I'm not very fond of that word. Basically, we need to structure the system to incentivize the culture we want. A natural part of this is providing feedback and goals to teachers as the engage with the system. Here are some major ideas:

* Record Keeping and Analytics: We need to keep track of what everyone is doing in an organized way. I'm toying with the idea of trying to design and deploy a Ruby on Rails gamified app for this, but that may be beyond my current abilities and resources (namely time). People need feedback to see how they're doing. Even the analytics YouTube provides are incredibly motivating.
* We should consider having structures in place for when teachers reach certain benchmarks they earn rewards. The rewards provide goals for teachers in the system.

TODO: describe the system further

##Videos from Administration
The idea for administrators to create videos about various professional development topics may have merit. Using the flipped classroom model to facilitate a meeting could be a really good idea. Faculty could watch the video(s) on their own time ahead of the meeting and then engage more deeply through an open-ended activity afterwards.

I should keep this in the back of my mind as well for introducing these ideas to faculty.

##Earning Equipment
A core issue with the success of this program is having the resources to get it done. Initially, we could designate some area on campus for recording as a means of reducing the entry level. Then, after teachers prove themselves (10 videos produced or so), the school could have funds for hooking them up with their own recording software, tablets, and mics.

##Supporting Software
The power of Khan and Coursera lies in more than just on-demand video. We need to have some server software and a webapp supporting this. I think I could take a lead in developing a basic initial product in Ruby on Rails, then if things start to take off we could hire a company or something.

###From a Teacher's Perspective
Registration would be standard and simple. Basically, we would just need the YouTube username to make calls to the public YouTube data API.

From there, we should be able to manage everything automatically. All a teacher would need to do is keep their playlists updated. The system would be smart enough (thanks to the YouTube Data API) to dynamically generate webpages and track teacher uploads. EASY!

Teachers would be able to log on to this site, say www.teacherteacher.org, and see their progress, which might include a badge system and a wall for other teachers to leave positive feedback. There could be other mechanics as well, but the two most important things by far are (a) for teachers to be able to see their progress and (b) for teachers to be able to be recognized for their great work.

##Easy Entry
I mentioned this early, but I figure it's worthwhile to flesh out more of the details on this. I think a teacher completely new to this should be able to walk into a room after school, sit down, create a YouTube account, record a video, and upload it in under 25 minutes, and submit it to the system I'll theoretically create. They could leave the experience feeling good about it.

##Video Hosting
I don't see a better solution than YouTube at the moment. Uploading with recording software like Camtasia is a breeze. The only thing I wish YouTube had is better playback controls like Coursera.

##Free?
This should be left up to the content creator(s), but I would encourage everyone to go the Khan Academy route. What good does it do to keep the content restricted? There's an unspoken fear that making content publicly available will somehow make the physical experience at school irrelevant, and that teacher might be working themselves out of jobs, but I think this is a failure to understand the strengths and weaknesses of digital learning.