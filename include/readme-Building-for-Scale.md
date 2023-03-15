
### Building for Scale [&uarr;](#Readme)

Speaking in general terms, scalability is the ability of a system to handle a growing amount of work by adding resources to it.

A software that was conceived with a scalable architecture in mind, is a system that will support higher workloads without any 
fundamental changes to it, but don’t be fooled, this isn’t magic. You’ll only get so far with smart thinking without adding more 
sources to it.

For a system to be scalable, there are certain things you must pay attention to, like:

- Coupling
- Observability
- Evolvability
- Infrastructure

When you think about the infrastructure of a scalable system, you have two main ways of building it: using on-premises resources or 
leveraging all the tools a cloud provider can give you.

The main difference between on-premises and cloud resources will be FLEXIBILITY, on cloud providers you don’t really need to plan ahead, 
you can upgrade your infrastructure with a couple of clicks, while with on-premises resources you will need a certain level of planning.


### Instrumentation, Monitoring, and Telemetry [&uarr;](#Readme)

#### Instrumentation [&uarr;](#Readme)

Instrumentation refers to the measure of a product’s performance, in order to diagnose errors and to write trace information.
Instrumentation can be of two types: source instrumentation and binary instrumentation.

Output:

- Profiling: measuring dynamic program behaviors during a training run with a representative input. This is useful for properties of a program that cannot be analyzed statically with sufficient precision, such as alias analysis.
- Inserting timers into functions.
- Logging major events such as crashes.

Limitations:

    Instrumentation is limited by execution coverage. If the program never reaches a particular point of execution, then instrumentation at 
    that point collects no data. For instance, if a word processor application is instrumented, but the user never activates the print feature, 
    then the instrumentation can say nothing about the routines which are used exclusively by the printing feature.
    
    Some types of instrumentation may cause a dramatic increase in execution time. This may limit the application of instrumentation to 
    debugging contexts.


#### Backend monitoring [&uarr;](#Readme)

Backend monitoring allows the user to view the performance of infrastructure i.e. the components that run a web application.
These include the HTTP server, middleware, database, third-party API services, and more.

Backend monitoring helps you find out when things go wrong — fast.  Each of the components powering a web app can run into a host of problems:

- software performance issues
- memory issues
- code bugs
- system-level software problems (OS issues, security problems)
- hardware issues (out of memory, out of disk space, disk failure, network card failure). 


#### Front-End monitoring [&uarr;](#Readme)

Front-end monitoring provides a complete view of the performance of your web application from a user?s perspective, including all third-party content.

While backend monitoring alerts you of failures of your own components, front-end monitoring reveals performance problems that are not necessarily related to component failure.  These include:

- Content problems (i.e., a new image on your site is too heavy, drags down performance; a script served by a site like Facebook is down, thereby slowing down your site)
- Browser-compatibility problems (i.e., users on FireFox 13 are experiencing a much slower page load than users on other browsers)
- Location-based problems (i.e., users in Asia are experiencing a much slower site than users elsewhere)
- Network issues (?last mile? connectivity is a bottleneck, especially on mobile)

Simply put, front end monitoring is important because the front-end is what users see, and the user?s experience is what ultimately 
matters.  If your site takes too long to load or provides a suboptimal user experience, you?ll lose site visitors ? and customers.

Front-end Monitoring Solutions:

Solutions under the front-end monitoring umbrella operate through different means. Here are three main ways data is collected:

1. RUM ? ?real user monitoring.?  This type of solution takes performance data from actual user visits as they happen, via a JavaScript injected into the browser.  RUM is effective for gathering data to find trends and patterns in performance.  RUM is limited, however, when it comes to pinpointing the source of a problem on your site (no waterfall chart accompanies the data) or alerting you to problems quickly.

2. Simulated Browsers.  This type of front end monitoring system uses simulated browsers to access a web page or web application.  This is the cheapest monitoring option, but is limited because simulated browsers cannot offer as accurate a representation of user experience as a real browser visit.

3. Real-Browser Monitoring.  This type of front-end monitoring uses real browsers — rather than simulated browsers — to access a website or web application.  This means it gathers information on exactly what a user would see if he or she accessed the site with the given criteria of browser, geographic location, and type of Internet connection.  This will allow you to fine-tune your site?s performance for certain criteria before any of your users run into problems.

#### Telemetry [&uarr;](#Readme)

Telemetry automatically collects, transmits and measures data from remote sources, using sensors and other devices to collect data. 
It uses communication systems to transmit the data back to a central location. Subsequently, the data is analyzed to monitor and control 
the remote system.

Telemetry data helps improve customer experiences and monitor security, application health, quality and performance.


Key takeaways:

- Collecting telemetry data is essential for administering and managing various IT infrastructures.
- Measure telemetry through monitoring tools, which measure everything from server performance to utilization.
- If a hacking attempt or security breach occurs, holistic monitoring helps you determine if critical data was lost or stolen or if systems are compromised.
- A telemetry software vendor helps implement a sound monitoring strategy and ensures that it evolves and becomes more comprehensive over time.
